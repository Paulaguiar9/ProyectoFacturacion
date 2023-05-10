@extends('layouts.appnew')
@section('content')
<div class="">
   
    <div class="">

        <h5>Reporte de ventas por día</h5>
    </div>
   
   <div class="row">
       <div class="col-12 col-md-4 text-center">
        <span>Fecha de la consulta:</span>
        <div class="form-group">
            <strong>{{\Carbon\Carbon::now()->format('d/m/Y')}}</strong>
        </div>
       </div>

       <div class="col-12 col-md-4 text-center">
        <span>Cantidad de registros:</span>
        <div class="form-group">
            <strong>{{$rep->count()}}</strong>
        </div>
       </div>

       <div class="col-12 col-md-4 text-center">
        <span>Total de ventas:</span>
        <div class="form-group">
            <strong>${{$total}}</strong>
        </div>
       </div>
   </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width:80px;">ID</th>
                        <th style="width:200px;">Nombres</th>
                        <th style="width:300px;">Cédula</th>
                        <th style="width:100px;">Total</th>
                        <th style="width:100px;">Fecha</th>

                    </tr>
                </thead>
              
                @foreach ($rep as $m)
                    <tr>
                        <td>{{$loop->iteration}} </td>
                        <td>{{ $m->client->Nombre }}</td>
                        <td>{{$m->client->Cedula}}</td>
                        <td class="text-right">$ {{number_format($m->total, 2)}}</td>
                        <td class="text-right">{{ date_format($m->created_at,'d/m/Y')  }}</td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>

    
</div>
@endsection



