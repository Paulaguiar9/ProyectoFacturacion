@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header">
            <h5>Formulario para editar Productos </h5>

            <form action="{{url('/actualizar-producto/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="col-md-6">
                    <label for="Nombres">Nombre del producto</label>
                    <input type="text" class="form-control{{ $errors->has('Nombres') ? ' is-invalid' : '' }}" id="Nombres" placeholder="Ingrese nombre del producto" value="{{$product->nombre}}" required="" name="Nombres">
                    @if ($errors->has('Nombres'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('nombres') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="categoria">Categoria</label>
                    <select class="form-select" aria-label="Default select example" id="categoria" name="categoria" required>
                        <option value="" > Seleccione una opción</option>
                        @foreach($categorias as $cat)
                                <option value="{{$cat->id}}">{{$cat->Nombre}}</option>
                                @endforeach         
                    </select>
                    @if ($errors->has('Direccion'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('direccion') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="preciocompra">Precio de compra</label>
                    <input type="number" class="form-control{{ $errors->has('preciocompra') ? ' is-invalid' : '' }}" id="preciocompra" placeholder="Ingrese precio compra" value="{{$product->preciocompra}}" required="" name="preciocompra">
                    @if ($errors->has('preciocompra'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('preciocompra') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="precioventa">Precio de venta</label>
                    <input type="number" class="form-control{{ $errors->has('precioventa') ? ' is-invalid' : '' }}" id="precioventa" placeholder="Ingrese precio venta" value="{{$product->precioventa}}" required="" name="precioventa">
                    @if ($errors->has('precioventa'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('precioventa') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" id="stock" placeholder="Ingrese stock" value="{{$product->stock}}" required="" name="stock">
                    @if ($errors->has('stock'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('stock') }}</strong>
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
