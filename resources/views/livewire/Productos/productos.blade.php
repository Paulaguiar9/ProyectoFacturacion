@extends('layouts.app')
@section('content')

<div class="">
    <div class="flash-message">
        @foreach (['danger', 'warning', 'message', 'info'] as $msg)
          @if(Session::has('alert-' . $msg))
          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </p>
          @endif
        @endforeach
      </div>
    <div class="">

        <h5>Lista de Productos</h5>
    </div>
    <div class="col-md-1">
        <a class="nav-link" href="{{route('producto-add')}}">
            <button type="button" class="btn btn-success"> <i class="fa fa-plus-circle"></i>   Añadir</button>
        </a>
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
                        <th style="width:100px;">Acción</th>

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
                        <td class="col-md-2">
                            <div class="d-flex">
                            <a href="{{url('/editar-producto/'.$product->id)}}">
                                <button type="button" class="btn btn-info btn-block"> <i class="fa fa-edit"></i>  Editar</button>
                            </a>

                            <form method="POST" action="{{ url('eliminar-producto',$product->id)}}" class="formulario-eliminar">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-block" type="submit" > <i class="fa fa-trash"></i>Borrar</button>
                            </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection


@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script>

    $('.formulario-eliminar').submit(function(e){
        e.preventDefault();

        Swal.fire({
            title: 'Estas seguro?'
            , text: "Se eliminará este cliente definitivamente!"
            , icon: 'warning'
            , showCancelButton: true
            , confirmButtonColor: '#3085d6'
            , cancelButtonColor: '#d33'
            , confirmButtonText: 'Si, Eliminar!'
            , cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
              
                this.submit();
            }
        })
    });

</script>
@endsection
