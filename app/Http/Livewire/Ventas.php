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
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;



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
        $return = (object)[
            'response' => false
        ];
        try {
            DB::beginTransaction();
        $vent=new Invoice;
        $vent->subTotal=$req->subTotal;
        $vent->iva=$req->iva;
        $vent->total=$req->total;
        $vent->client_id=$req->client_id;
        $vent->save();
        
        $detail = [];
        foreach($req->detail as $d) {
            $obj = new InvoiceItem;
            
            $obj->product_id = $d['id'];
            $obj->cantidad = $d['quantity'];
            $obj->PrecioUnitario = $d['precioventa'];
            $obj->subTotal = $d['subTotal'];

            $detail[] = $obj;
           
            
        }
        $vent->detail()->saveMany($detail);
        
        $return->response = true;        
        Session::flash('alert-info','Comprobante generado exitosamente');
        DB::commit(); 
      } catch (\Exception $e){
        DB::rollBack();
     }
      return json_encode($return);
      return redirect()->route('ventas');   
     }

public function reportday()
    {
        $rep=Invoice::whereDate('created_at',Carbon::today())->get();
        $total=$rep->sum('total');
        return view('livewire.Reportes.ReporteDia',compact('rep','total'));
    }
public function reportrango()
    {
        $sales=Invoice::whereDate('created_at',Carbon::today())->get();
        $total=$sales->sum('total');
        return view('livewire.Reportes.ReporteMes',compact('sales','total'));
    }      
public function reportResults(Request $request)
    {
        try{
        $fi=$request->fecha_ini.'d/m/Y 00:00:00';
        $ff=$request->fecha_fin.'d/m/Y 23:59:59';
        $sales=Invoice::whereBetween(('created_at'),[$fi,$ff])->get();
        $total=$sales->sum('total');
        return view('livewire.Reportes.ReporteMes',compact('sales','total'));
    }catch (\Exception $e) {
      
  
    }
    }

}


