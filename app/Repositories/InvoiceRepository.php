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
  
    
}