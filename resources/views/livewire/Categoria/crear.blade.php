@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header">
            <h5>Formulario para agregar Categoría </h5>


            <form action="{{url('/guardar-categoria')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <!--nombre-->
                <div class="col-md-6">
                    <label for="Nombres">Nombre de la Categoría</label>
                    <input type="text" class="form-control{{ $errors->has('Nombres') ? ' is-invalid' : '' }}" id="Nombres" placeholder="Ingrese nombre de la categoría" value="" required="" name="Nombres">
                    @if ($errors->has('Nombres'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('nombres') }}</strong>
                    </span>
                    @endif
                </div>

                <!-- Imagen -->
                <div class="col-md-6">
                    <label for="imagen">Imagen</label>
                    <input id="imagen" type="file" class="form-control{{ $errors->has('imagen') ? ' is-invalid' : '' }}" name="imagen" required placeholder="Seleccione Imagen"  accept="image/png, image/jpeg">

                    @if ($errors->has('imagen'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('imagen') }}</strong>
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
                <a href="{{route('categorias')}}">
                    <button type="button" class="btn btn-danger btn-block">Cancelar</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
