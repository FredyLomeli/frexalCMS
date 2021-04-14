@extends('layouts.main')

@section('styles')
<link rel="stylesheet" href="{{ asset('lib/daterangepicker/daterangepicker.css') }}">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="{{ asset('lib/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
@endsection

@section('header')
<h1>Bienvenido!</h1>
@endsection

@section('content')
@include('messages.info')
@include('messages.warning')
@include('messages.list_errors')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-5">
                <h3>Medidor de visitas</h3>
            </div>
            <div class="col-md-5 text-center">
                <h3>Visitas totales : {{$cantidad_visitas}}</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('adminIndexConteo')}}" method="post">
            {{csrf_field()}}
            <div class="row form-group col-md-12">
                <label class="col-md-2">Fecha inicial:</label>
                <div class="input-group date col-md-3" id="fecha_inicial" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#fecha_inicial"
                        id="fecha_inicial" name="fecha_inicial" placeholder="YYYY-MM-DD" required
                        value="{{ old('fecha_inicial') }}"/>
                    <div class="input-group-append" data-target="#fecha_inicial" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                    @if ($errors->has('fecha_inicial'))
                        <small class="text-center text-danger">{{ $errors->first('fecha_inicial') }}</small>
                    @endif
                </div>
                <label class="col-md-2">Fecha final:</label>
                <div class="input-group col-md-3 date" id="fecha_final" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input " data-target="#fecha_final"
                        id="fecha_final" name="fecha_final" placeholder="YYYY-MM-DD" required
                        value="{{ old('fecha_final') }}"/>
                    <div class="input-group-append" data-target="#fecha_final" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                    @if ($errors->has('fecha_final'))
                        <small class="text-center text-danger">{{ $errors->first('fecha_final') }}</small>
                    @endif
                </div>
                <button type="submit" class="btn btn-info col-md-2">Consultar</button>
            </div>
        </form>
    </div>
    @isset($custom_meter)
    <div class="row">
        <div class="form-group col-md-12 text-center">
           <label for="">Reporte de visitas desde {{$custom_meter['fecha_inicio']}} hasta el {{$custom_meter['fecha_final']}}</label>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12 text-center">
            <label for="">Total de visitas: {{$custom_meter['total']}}</label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-2 text-center">
            <label for="">Pagina inicio: {{$custom_meter['principal']}}</label>
        </div>
        <div class="col-md-6 text-center">
            <label for="">Busquedas: {{$custom_meter['busqueda']}}</label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 text-center">
            <label for="">Por categorias: {{$custom_meter['categoria']}}</label>
        </div>
        <div class="col-md-6 text-center">
            <label for="">Productos: {{$custom_meter['productos']}}</label>
        </div>
    </div>
    @endisset
    <br>
</div>
@endsection

@section('script')
<!-- InputMask -->
<script src="{{ asset('lib/moment/moment.min.js') }}"></script>
<script src="{{ asset('lib/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ asset('lib/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('lib/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<script>
    $(function () {
      //Date range picker
      $('#fecha_inicial').datetimepicker({
          format: 'YYYY-MM-DD'
      });
      $('#fecha_final').datetimepicker({
          format: 'YYYY-MM-DD'
      });
    })
  </script>
@endsection

