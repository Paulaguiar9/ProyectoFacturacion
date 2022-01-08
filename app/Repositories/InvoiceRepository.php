<?php

namespace App\Repositories;

use App\Models\Invoice;
use App\Models\InvoiceItem;
use Illuminate\Support\Facades\DB;

class InvoiceRepository {
    private $model;
    
    public function __construct(){
        $this->model = new Invoice();
    }

    public function get($id) {
        return $this->model->find($id);
    }

    public function getAll() {
        return $this->model->orderBy('id', 'desc')->get();
    }
    public function save($data) {
        $return = (object)[
            'response' => false
        ];

        try {
            DB::beginTransaction();
      
            $this->model->subTotal = $data->subTotal;
            $this->model->iva = $data->iva;
            $this->model->total = $data->total;
            $this->model->client_id = $data->client_id;

            $this->model->save();
            $detail = [];
            foreach($data->detail as $d) {
                $obj = new InvoiceItem;

                $obj->product_id = $d->product_id;
                $obj->cantidad = $d->cantidad;
                $obj->PrecioUnitario = $d->PrecioUnitario;
                $obj->subTotal = $d->subTotal;

                $detail[] = $obj;
            }

            $this->model->detail()->saveMany($detail);
            $return->response = true;

            DB::commit();
        } catch (\Exception $e){
            DB::rollBack();
        }

        return json_encode($return);
    }
    
}