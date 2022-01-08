@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header">
            <h5>Formulario para editar Categoría </h5>

            <form action="{{url('/actualizar-categoria/'.$cate->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="col-md-6">
                    <label for="Nombres">Nombre de la Categoría</label>
                    <input type="text" class="form-control{{ $errors->has('Nombres') ? ' is-invalid' : '' }}" id="Nombres" placeholder="Ingrese nombre de la categorías" value="{{$cate->Nombre}}" required="" name="Nombres">
                    @if ($errors->has('Nombres'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('nombres') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="imagen">Imagen</label>
                    <input type="file" class="form-control{{ $errors->has('imagen') ? ' is-invalid' : '' }}" name="imagen"   required="" accept="image/png, image/jpeg">
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
                    <button class="btn btn-primary btn-block" type="submit">Actualizar </button>
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
