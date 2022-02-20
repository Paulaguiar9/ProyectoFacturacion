<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cliente;
use Illuminate\Http\Request;
Use Session;

class Clientes extends Component
{
    public function render()
    {
        $client['cliente']=Cliente::paginate();
        return view('livewire.Cliente.clientes',$client);
    }
    public function agregar()
    {
        return view('livewire.Cliente.crear');
    }
    public function guardar(Request $request)
    {
        $client = new Cliente;
		$client->Nombre=$request->Nombres;
        $client->Cedula=$request->cedula;
		$client->Direccion=$request->direccion;
		$client->Telefono=$request->telefono;
		$client->email=$request->Email;
		
		$client->save();
	
        Session::flash('alert-info','Nuevo cliente ingresado exitosamente');
       	return redirect()->route('clientes');
    }

    public function editar($id)
    {
        $client= Cliente::findOrFail($id);
        return view('livewire.Cliente.editar',compact('client'));
    }
    public function actualizar(Request $request)
    {
        $client=Cliente::find($request->id);
		$client->Nombre=$request->Nombres;
        $client->Cedula=$request->cedula;
		$client->Direccion=$request->direccion;
		$client->Telefono=$request->telefono;
		$client->email=$request->email;
		$client->save();
		Session::flash('alert-info','Cliente actualizado exitosamente');
       	return redirect()->route('clientes');
    }
    public function eliminar($id)
    
    {
        try{
            $client=Cliente::find($id);
            if($client->delete()){
              
            }
            Session::flash('alert-info','Cliente eliminado exitosamente');
        }catch (\Exception $e) {
            Session::flash('alert-danger','No se puede eliminar Cliente, ya que contiene información relacionada con otras areas de sistema');
      
        }
        return redirect()->route('clientes');
    }
    
}
