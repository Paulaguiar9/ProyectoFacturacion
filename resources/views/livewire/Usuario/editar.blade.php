@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header">
            <h5>Formulario para editar Usuarios </h5>

            <form action="{{url('/actualizar-usuario/'.$user->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="col-md-6">
                    <label for="Nombres">Nombres</label>
                    <input type="text" class="form-control{{ $errors->has('Nombres') ? ' is-invalid' : '' }}" id="Nombres" placeholder="Ingrese nombres" value="{{$user->name}}" required="" name="Nombres">
                    @if ($errors->has('Nombres'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('nombres') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="Email">Email</label>
                    <input type="Email" class="form-control{{ $errors->has('Email') ? ' is-invalid' : '' }}" id="Email" name="Email" placeholder="Ingrese email" value="{{$user->email}}" required="">
                    @if ($errors->has('Email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                    <div class="col-md-6">
                        <label for="Password">Contraseña</label>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Ingrese contraseña">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                
            
                <div class="col-md-6">
                    <label for="Perfil">Perfil</label>
                    <p></p>
                    <select class="form-select" aria-label="Default select example" id="perfil" name="perfil" required>

                        <option value="Administrador" {{$user->perfil=='Administrador'?'selected':''}}>Administrador</option>
                        <option value="Secretaria"{{$user->perfil=='Secretaria'?'selected':''}} >Secretaria</option>
                    </select>
                    @if ($errors->has('perfil '))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('perfil') }}</strong>
                    </span>
                    @endif
                </div>
                
                <div class="col-md-6">
                    <label for="estado">Estado</label>
                    <p></p>
                    <select class="form-select" aria-label="Default select example"  name="estado" required >
        
                        <option value="Activo" {{$user->estado=='Activo'?'selected':''}}>Activo</option>
                        <option value="Inactivo"{{$user->estado=='Inactivo'?'selected':''}} >Inactivo</option>
                    </select>
                     @if ($errors->has('estado'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('estado') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-6">
                    <p>

                    </p>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-primary btn-block" type="submit">Actualizar </button>
                </div>

            </form>
            <div class="col-md-6">
                <a href="{{route('usuarios')}}">
                    <button type="button" class="btn btn-danger btn-block">Cancelar</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
