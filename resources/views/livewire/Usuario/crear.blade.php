@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header">
            <h5>Formulario para agregar Usuario </h5>


            <form action="{{url('/guardar-usuario')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <!--nombre-->
                <div class="col-md-6">
                    <label for="Nombres">Nombres</label>
                    <input type="text" class="form-control{{ $errors->has('Nombres') ? ' is-invalid' : '' }}" id="Nombres" placeholder="Ingrese nombres" value="" required="" name="Nombres">
                    @if ($errors->has('Nombres'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('nombres') }}</strong>
                    </span>
                    @endif
                </div>

                <!-- email -->
                <div class="col-md-6">
                    <label for="Email">Email</label>
                    <input type="Email" class="form-control{{ $errors->has('Email') ? ' is-invalid' : '' }}" id="Email" name="Email" placeholder="Ingrese email" value="" required="">
                    @if ($errors->has('Email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif

                </div>

                <!-- contraseña -->
                <div class="col-md-6">
                    <label for="password">Contraseña</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Ingrese contraseña">

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <!-- perfil -->
                <div class="col-md-6">
                            <label for="perfil">Selecione perfil</label>
                            <p></p>
                            <select class="form-select" id="perfil" name="perfil" required >
                                <option value="" > Seleccione una opción</option>
                                <option value="Administrador">Administrador</option>
                                <option value="Secretaria">Secretaria</option>
                               
                            </select>
                            @if ($errors->has('perfil'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('perfil') }}</strong>
                            </span>
                            @endif
                        </div>


                <!-- estado -->
                <div class="col-md-6">
                            <label for="estado">Estado</label>
                            <p></p>
                            <select class="form-select" aria-label="Default select example" id="estado" name="estado" required>
                                <option value="" > Seleccione una opción</option>
                                <option value="Activo">Activo  </option>
                                <option value="Inactivo">Inactivo</option>
                               
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
                    <button class="btn btn-primary btn-block" type="submit">Agregar </button>
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
