@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header">
            <h5>Formulario para agregar Productos </h5>


            <form action="{{url('/guardar-producto')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <!--nombre-->
                <div class="col-md-6">
                    <label for="Nombres">Nombre del Producto</label>
                    <input type="text" class="form-control{{ $errors->has('Nombres') ? ' is-invalid' : '' }}" id="Nombres" placeholder="Ingrese nombre del producto" value="" required="" name="Nombres">
                    @if ($errors->has('Nombres'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('nombres') }}</strong>
                    </span>
                    @endif
                </div>

                <!-- Categoria -->
                <div class="col-md-6">
                    <label for="categoria">Selecione Categoria</label>
                    <p></p>
                    <select class="form-select" aria-label="Default select example" id="categoria" name="categoria" required>
                        <option value=""> Seleccione una opción</option>
                        @foreach($categorias as $cat)
                        <option value="{{$cat->id}}">{{$cat->Nombre}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('categoria'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('categoria') }}</strong>
                    </span>
                    @endif
                </div>

                <!-- Precio Compra -->
                <div class="col-md-6">
                    <label for="preciocompra">Precio Compra </label>
                    <input id="preciocompra" type="number" step="0.01" class="form-control{{ $errors->has('preciocompra') ? ' is-invalid' : '' }}" name="preciocompra" required placeholder="Ingrese el precio de compra">

                    @if ($errors->has('preciocompra'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('preciocompra') }}</strong>
                    </span>
                    @endif
                </div>

                <!-- Precio Venta -->
                <div class="col-md-6">
                    <label for="precioventa">Precio Venta </label>
                    <input id="precioventa" type="number" step="0.01" class="form-control{{ $errors->has('precioventa') ? ' is-invalid' : '' }}" name="precioventa" required placeholder="Ingrese el precio de venta">

                    @if ($errors->has('precioventa'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('precioventa') }}</strong>
                    </span>
                    @endif
                </div>


                <!-- Stock -->
                <div class="col-md-6">
                    <label for="stock">Stock</label>
                    <input id="stock" type="number" step="0.01" class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" name="stock" placeholder="Ingrese stock" required="">
                    @if ($errors->has('stock'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('stock') }}</strong>
                    </span>
                    @endif
                </div>

               

                <!-- Imagen -->
                <div class="col-md-6">
                    <label for="imagen">Imagen</label>
                    <input id="imagen" type="file" class="form-control{{ $errors->has('imagen') ? ' is-invalid' : '' }}" name="imagen" required placeholder="Seleccione Imagen" accept="image/png, image/jpeg">

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
                <a href="{{route('productos')}}">
                    <button type="button" class="btn btn-danger btn-block">Cancelar</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
