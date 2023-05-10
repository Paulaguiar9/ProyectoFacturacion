@extends('layouts.appnew')
@section('content')
<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header">
            <h5>Formulario para editar Usuarios </h5>

            <form action="{{url('/actualizar-cliente/'.$client->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="col-md-6">
                    <label for="Nombres">Nombres</label>
                    <input type="text" class="form-control{{ $errors->has('Nombres') ? ' is-invalid' : '' }}" id="Nombres" placeholder="Ingrese nombres" value="{{$client->Nombre}}" required="" name="Nombres">
                    @if ($errors->has('Nombres'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('nombres') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="cedula">Cédula</label>
                    <input type="text" class="form-control{{ $errors->has('cedula') ? ' is-invalid' : '' }}" id="ceduña" name="cedula" placeholder="Ingrese cédula" value="{{$client->Cedula}}" required="">
                    @if ($errors->has('cedula'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('cedula') }}</strong>
                    </span>
                    @endif
                </div>
                    <div class="col-md-6">
                        <label for="Direccion">Dirección</label>
                        <input id="direccion" type="direccion" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}"  value="{{$client->Direccion}}"name="direccion" required placeholder="Ingrese direccion">

                            @if ($errors->has('direccion'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('direccion') }}</strong>
                                </span>
                            @endif
                        </div>
                
            
                <div class="col-md-6">
                    <label for="telefono">Teléfono</label>
                            <input type="number" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" id="telefono" placeholder="Ingrese teléfono" value="{{$client->Telefono}}" name="telefono" required="">
                             @if ($errors->has('telefono'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('telefono') }}</strong>
                                </span>
                            @endif
                </div>
                <div class="col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" placeholder="Ingrese email" value="{{$client->email}}" required="">
                     @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
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
                <a href="{{route('clientes')}}">
                    <button type="button" class="btn btn-danger btn-block">Cancelar</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
