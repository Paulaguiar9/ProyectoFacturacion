<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Livewire\Component;
Use Session;
use Illuminate\Support\Facades\Storage;


class Productos extends Component
{
    public function render()
    {
        $product ['producto']=Producto::paginate();
        $categorias=Categoria::all();
        return view('livewire.Productos.productos',$product)->with(['categorias'=>$categorias]);
    }
    public function agregar()
    {
        $categorias=Categoria::all();
        return view('livewire.Productos.crear')->with(['categorias'=>$categorias]);
    }
    public function guardar(Request $request){
        $product = new Producto();
		$product->nombre=$request->Nombres;
        $product->preciocompra=$request->preciocompra;
		$product->precioventa=$request->precioventa;
		$product->stock=$request->stock;

	
        $product->categoria_id=$request->categoria;
        if ($request->hasFile('imagen')) {
            $product->imagen=$request->imagen->hashName();
            $request->file('imagen')->storeAs('public/imagen/Productos',$request->imagen->hashName());  

        }
		$product->save();
	
        Session::flash('alert-info','Nuevo producto ingresado exitosamente');
       	return redirect()->route('productos');
    }

    public function editar($id)
    {
        $categorias=Categoria::all();
        $product= Producto::findOrFail($id);
        return view('livewire.Productos.editar',compact('product'))->with(['categorias'=>$categorias]);
    }

    public function actualizar(Request $request)
    {
        $product=Producto::find($request->id);
        $product->update([
            $product->nombre=$request->Nombres,
            $product->preciocompra=$request->preciocompra,
            $product->precioventa=$request->precioventa,
            $product->stock=$request->stock,
        
            $product->categoria_id=$request->categoria
        ]);
       
        if ($request->hasFile('imagen')) {
            if (   Storage::exists ('public/imagen/Productos/'.$product->imagen)) {
                Storage::delete('public/imagen/Productos/'.$product->imagen);
            }
           $product->imagen=$request->imagen->hashName();
           $request->file('imagen')->storeAs('public/imagen/Productos',$request->imagen->hashName());  
        }
		$product->save();
		Session::flash('alert-info','Producto actualizado exitosamente');
       	return redirect()->route('productos');
    }

    public function eliminar($id)
    {

            $product=Producto::find($id);
            if($product->delete()){
                if (   Storage::exists ('public/imagen/Productos/'.$product->imagen)) {
                    Storage::delete('public/imagen/Productos/'.$product->imagen);
                }
            }
            Session::flash('alert-info','Producto eliminado exitosamente');      
            return redirect()->route('productos');

    

    }
}
