@extends('layouts.appnew')

@section('content')
<div class="">
    
    <div class="">

        <h5>Lista de Productos</h5>
    </div>
  
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th style="width:300px;">Nombre</th>     
                        <th style="width:100px;">Categoria</th>        
                        <th style="width:100px;">Precio</th>
                        <th style="width:100px;">Stock</th>
  
                        <th style="width:100px;">Imagen</th>
                       

                    </tr>
                </thead>
                
                <tbody>
                    @foreach($producto as $product)
                    <tr>
                        <td>{{$loop->iteration}} </td>
                        <td>{{$product->nombre}}</td>
                        @foreach($categorias as $cat)
                        @if($product->categoria_id == $cat->id)
                        <td>{{$cat->Nombre}}</td>
                        @endif 
                        @endforeach
                        <td>{{$product->precioventa}}</td>
                        <td>{{$product->stock}}</td>

                        <td>
                            <img src="{{ asset('storage/imagen/Productos/'.$product->imagen)}}" class="img-fluid" width="70px"height="70" >
                        </td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
