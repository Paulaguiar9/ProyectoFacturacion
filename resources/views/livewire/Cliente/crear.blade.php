@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header">
            <h5>Formulario para agregar Cliente </h5>


            <form action="{{url('/guardar-cliente')}}" method="POST" enctype="multipart/form-data">
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

                <!-- Cedula -->
                <div class="col-md-6">
                    <label for="cedula">Cédula</label>
                    <input id="cedula" type="text" class="form-control{{ $errors->has('cedula') ? ' is-invalid' : '' }}" name="cedula" required placeholder="Ingrese cédula">

                    @if ($errors->has('cedula'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('cedula') }}</strong>
                        </span>
                    @endif
                </div>

                <!-- direcion -->
                <div class="col-md-6">
                    <label for="direccion">Dirección</label>
                    <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" required placeholder="Ingrese dirección">

                    @if ($errors->has('direccion'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('direccion') }}</strong>
                        </span>
                    @endif
                </div>


                <!-- Telefono -->
                <div class="col-md-6">
                    <label for="telefono">Teléfono</label>
                    <input id="telefono" type="number" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono"  placeholder="Ingrese teléfono" required="">
                     @if ($errors->has('telefono'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('telefono') }}</strong>
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
                <div class="col-md-6">
                    <p>
                        
                    </p>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-primary btn-block" type="submit">Agregar </button>
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
