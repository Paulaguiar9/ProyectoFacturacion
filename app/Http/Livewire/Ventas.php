<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use  App\Repositories\ClientRepository;
use  App\Repositories\ProductRepository;
use  App\Repositories\InvoiceRepository;
use PDF;
use Session;
use Livewire\Component;
use App\Models\Producto;
use App\Models\Invoice;
use App\Models\InvoiceItem;


class Ventas extends Component
{

   private $_clientRepo;
   private $_productRepo;
   private $_invoiceRepo;

   public function __CONSTRUCT(   ClientRepository $clientRepo  , ProductRepository $productRepo , InvoiceRepository $invoiceRepo)
  {
      $this->_clientRepo = $clientRepo;
      $this->_productRepo = $productRepo;
      $this->_invoiceRepo = $invoiceRepo;   
    
  }
    public function renderTable( )
   {
         return view("livewire.Ventas.ventas");

   }

    public function index()
    {
        return view(
            'livewire.Ventas.index', [
                'model' => $this->_invoiceRepo->getAll()
            ]
        );
    }

    public function detalle($id)
    {
        $model = $this->_invoiceRepo->get($id);
        $invoice_name = sprintf('comprobante-%s.pdf', str_pad ($model->id, 7, '0', STR_PAD_LEFT));

        $pdf = PDF::loadView('livewire.Ventas.pdf', [
            'model' => $model
        ]);

        return $pdf->stream($invoice_name, array("Attachment" => false));
      
    }
    public function pdf($id)
    {
        $model = $this->_invoiceRepo->get($id);
        $invoice_name = sprintf('comprobante-%s.pdf', str_pad ($model->id, 7, '0', STR_PAD_LEFT));

        $pdf = PDF::loadView('livewire.Ventas.pdf', [
            'model' => $model
        ]);

        return $pdf->download($invoice_name);
      
    }

    public function delete($id)
    {
        $vent=Invoice::find($id);
        //stock
          
        $vent->delete();
         Session::flash('alert-info','Venta eliminada exitosamente');
        return redirect()->route('ventas');
        
 
    }
   
   public function findClient(Request $req)
   {
       return $this->_clientRepo
                   ->findByName($req->input('q'));
   }  

   public function findProduct(Request $req)
    {
       return $this->_productRepo
                   ->findByName($req->input('q'));
    }
 
    public function save(Request $req)
    {
        $data = (object)[
            'subTotal' => $req->input('subTotal'),
            'iva' => $req->input('iva'),
            'total' => $req->input('total'),
            'client_id' => $req->input('client_id'),
            'detail' => [ ]
        ];

        foreach($req->input('detail') as $d){
            $data->detail[ ] = (object)[
                'product_id'        => $d['id'],
                'cantidad'            => $d['quantity'],
                'PrecioUnitario' => $d['precioventa'],
                'subTotal'            => $d['subTotal']
            ];
        }
     

        return $this->_invoiceRepo->save($data);
    }

}
