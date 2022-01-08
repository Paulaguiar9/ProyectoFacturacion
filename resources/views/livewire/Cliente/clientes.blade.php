@extends('layouts.app')
@section('content')

<div class="card mb-4">
    <div class="flash-message">
        @foreach (['danger', 'warning', 'message', 'info'] as $msg)
          @if(Session::has('alert-' . $msg))
          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </p>
          @endif
        @endforeach
      </div>
    <div class="card-header">

        <h5>Lista de Clientes</h5>
    </div>
    <div class="col-md-1">
        <a class="nav-link" href="{{route('cliente-add')}}">
            <button type="button" class="btn btn-success"> <i class="fa fa-user-plus"></i> Añadir</button>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>          
                        <th>Cédula</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Acción</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>          
                        <th>Cédula</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Acción</th>

                    </tr>
                </tfoot>
                <tbody>
                    @foreach($cliente as $clientess)
                    <tr>
                        <td>{{$loop->iteration}} </td>
                        <td>{{$clientess->Nombre}}</td>
                        <td>{{$clientess->Cedula}}</td>
                        <td>{{$clientess->Direccion}}</td>
                        <td>{{$clientess->Telefono}}</td>
                        <td>{{$clientess->email}}</td>
                        <td class="col-md-2">
                            <div class="d-flex">
                            <a href="{{url('/editar-cliente/'.$clientess->id)}}">
                                <button type="button" class="btn btn-info btn-block"> <i class="fa fa-edit"></i>  Editar</button>
                            </a>

                            <form method="POST" action="{{ url('eliminar-cliente',$clientess->id)}}" class="formulario-eliminar">
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



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
