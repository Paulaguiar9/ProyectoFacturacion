<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
Use Session;

class Categorias extends Component
{
    public function render()
    {
        $cate['categoria']=Categoria::paginate();
        return view('livewire.Categoria.categorias',$cate);
    }
    public function agregar()
    {
        return view('livewire.Categoria.crear');
    }
    public function guardar(Request $request)
    {
        $cate = new Categoria();
        if ($request->hasFile('imagen')) {
            $cate->imagen=$request->imagen->hashName();
            $request->file('imagen')->storeAs('public/imagen/Categorias',$request->imagen->hashName());  

        }

		$cate->Nombre=$request->Nombres;
      
		$cate->save();
	
        Session::flash('alert-info','Nueva categoría ingresado exitosamente');
       	return redirect()->route('categorias');
    }

    public function editar($id)
    {
        $cate= Categoria::findOrFail($id);
        return view('livewire.Categoria.editar',compact('cate'));
    }
    public function actualizar(Request $request)
    {
        $cate=Categoria::find($request->id);
        $cate->update([
            $cate->Nombre=$request->Nombres
        ]);
       
        if ($request->hasFile('imagen')) {
            if (   Storage::exists ('public/imagen/Categorias/'.$cate->imagen)) {
                Storage::delete('public/imagen/Categorias/'.$cate->imagen);
            }
           $cate->imagen=$request->imagen->hashName();
           $request->file('imagen')->storeAs('public/imagen/Categorias',$request->imagen->hashName());  
        }
		$cate->save();
		Session::flash('alert-info','Categoría actualizado exitosamente');
       	return redirect()->route('categorias');
    }
    public function eliminar($id)
    {
        try{
            $cate=Categoria::find($id);
            if($cate->delete()){
                if (   Storage::exists ('public/imagen/Categorias/'.$cate->imagen)) {
                    Storage::delete('public/imagen/Categorias/'.$cate->imagen);
                }
            }
            Session::flash('alert-info','Categoria eliminado exitosamente');
        }catch (\Exception $e) {
            Session::flash('alert-danger','No se puede eliminar Categoria, ya que contiene información relacionada con otras areas de sistema');
      
        }
       
       	return redirect()->route('categorias');

    }
}
