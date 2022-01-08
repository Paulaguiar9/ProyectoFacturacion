<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
Use Session;


class Usuarios extends Component
{
    public function render()
    {
        $user['usuarios']=User::paginate();
        return view('livewire.Usuario.usuarios',$user);

    }
    public function agregar()
    {
        return view('livewire.Usuario.crear');
    }
    public function guardar(Request $request)
    {
        $user = new User;
		$user->name=$request->Nombres;
        $user->email=$request->Email;
		$user->password=Hash::make($request->password);
		$user->perfil=$request->perfil;
		$user->estado=$request->estado;
		
		$user->save();
	
        Session::flash('alert-info','Nuevo usuario ingresado exitosamente');
       	return redirect()->route('usuarios');
    }

    public function editar($id)
    {
        $user= User::findOrFail($id);
        return view('livewire.Usuario.editar',compact('user'));
    }
    public function actualizar(Request $request)
    {
        $user=User::find($request->id);
		$user->name=$request->Nombres;	
		$user->email=$request->Email;		
		$user->password= Hash::make($request->password);
		$user->perfil=$request->perfil;
		$user->estado=$request->estado;
		$user->save();
		Session::flash('alert-info','Usuario actualizado exitosamente');
       	return redirect()->route('usuarios');
    }
    public function eliminar($id)
    {
        $user=User::find($id);
   
       $user->delete();
       Session::flash('alert-info','Usuario eliminado exitosamente');
       	return redirect()->route('usuarios');

    }
}
