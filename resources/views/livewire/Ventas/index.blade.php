@extends('layouts.appnew')
@section('content')

<div class="container">
    <div class="flash-message">
        @foreach (['danger', 'warning', 'message', 'info'] as $msg)
          @if(Session::has('alert-' . $msg))
          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </p>
          @endif
        @endforeach
      </div>
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">
                Comprobantes
            </h2>
            <div class="col-md-1">
                <a class="nav-link" href="{{route('ventas-add')}}">
                    <button type="button" class="btn btn-success"> <i class="fa fa-clipboard"></i> Nuevo Comprobante </button>
                </a>
            </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th style="width:100px;" class="text-right">Cédula</th>
                        <th style="width:50px;" class="text-right">Sub Total</th>
                        <th style="width:50px;" class="text-right">IVA</th>
                        <th style="width:50px;" class="text-right">Total</th>
                        <th style="width:80px;" class="text-right">Creado</th>
                        <th style="width:30px;">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($model as $m)
                    <tr>
                        <td>
                            <a   href="{{url('/ventas-detail/'.$m->id )}}  " formtarget="_blank" target="_blank">
                                {{ $m->client->Nombre }}
                            </a>
                        </td>
                      <td>{{$m->client->Cedula}}</td>
                        <td class="text-right">$ {{number_format($m->subTotal, 2)}}</td>
                        <td class="text-right">$ {{number_format($m->iva, 2)}}</td>
                        <td class="text-right">$ {{number_format($m->total, 2)}}</td>
                        <td class="text-right">{{ date_format($m->created_at,'d/m/Y')}}</td>
                        <td class="text-right">
                            <div class="d-flex">
                            <a class="btn btn-success" href="{{url('/ventas-pdf/'.$m->id)}}">
                                <i class="ft-file"></i> 
                            </a>
                            <form method="POST" action="{{url('/ventas-eliminar/'.$m->id)}}" class="formulario-eliminar">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-block" type="submit" > <i class="ft-trash"></i></button>
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
            , text: "Se eliminará esta factura definitivamente!"
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
