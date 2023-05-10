@extends('layouts.appnew')
@section('content')
<div class="">
   
    <div class="">

        <h5>Reporte de ventas por rango</h5>
    </div>
   
    <form action="{{url('/report-results')}}" method="POST" enctype="multipart/form-data">
        @csrf

   <div class="row">
       <div class="col-12 col-md-3 ">
        <span>Fecha Inicial</span>
        <div class="form-group">
           <input  class="form-control"type="date" value="{{ old('fecha_ini')}}" name="fecha_ini" id="fecha_ini"  min="2000-01-01" max="2030-12-31">
        </div>
       </div>

       <div class="col-12 col-md-3 ">
        <span>Fecha Final</span>
        <div class="form-group">
           <input  class="form-control"type="date" value="{{ old('fecha_fin')}}" name="fecha_fin" id="fecha_fin" min="2000-01-01" max="2030-12-31">
        </div>
       </div>

       <div class="col-12 col-md-3 text-center mt-3">
       
        <div class="form-group">
           <button type="submit" class="btn btn-primary btn-sm">Consultar</button>
        </div>
       </div>

       <div class="col-12 col-md-3 text-center">
        <span>Total de ventas:</span>
        <div class="form-group">
            <strong>${{$total}}</strong>
        </div>
       </div>
   </div>
  </form>
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
                @foreach ($sales as $m)
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




