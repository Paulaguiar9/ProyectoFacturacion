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
                Nuevo comprobante
            </h2>
            <invoice></invoice>
        </div>
    </div>
</div>
@endsection

@section('bottom')
    <script src="{{asset('bower_components/components/invoice.tag')}}" type="riot/tag"></script>
    <script >
        $(document).ready(function(){
            
            riot.mount('invoice');
           
        })
    </script>
@endsection