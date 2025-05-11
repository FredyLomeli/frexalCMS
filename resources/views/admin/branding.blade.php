@extends('layouts.main')

@section('header')
<h1>Editar {{ $branding['name'] }}</h1>
@endsection

@section('content')
@include('messages.info')
@include('messages.warning')
@include('messages.list_errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('save.branding', ['branding' => $branding['field']]) }}">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label for="file_img" class="col-sm-3 col-form-label">Mostrar el apartado {{ $branding['field'] }} en la pagina:</label>
                        <div class="col-sm-2">
                            <input class="form-check-input" type="checkbox" id="see" name="see" value="1" @if ($branding['see'] === "1") checked  @endif>
                            <label class="form-check-label" for="see" >Mostrar</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="branding" class="col-sm-2 col-form-label">{{($branding['name'] === 'Valores' ? '°' : '')}}{{$branding['name']}}:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="branding" rows="4" cols="50" id="branding"
                                 required>{{ old('branding', $branding['value']) }}</textarea>
                                <input id="ban" name="ban" value="{{$branding['field']}}" type="hidden">
                            @if ($errors->has('branding'))
                                <small class="text-center text-danger">{{ $errors->first('branding') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="file_img" class="col-sm-3 col-form-label">Selecciona una imagen: (Se recomienda 674px x 553px)</label>
                        <div class="col-sm-6">
                            <input type="file" class="form-control" name="file_img"
                                value="{{ old('file_img') }}"
                                id="file_img" placeholder="Selecciona una imagen">
                            @if ($errors->has('file_img'))
                                <small class="text-center text-danger">{{ $errors->first('file_img') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="file_img" class="col-sm-3 col-form-label">Imagen actual:</label>
                        <img src="{{ asset('img/about/' . $branding['img']) }}" style="width: 50%; height: 50% ;" >
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info float-right">Guardar</button>
                </div>
                <!-- /.card-footer -->
            </form>
          </div>
    </div>
  </div>

@endsection
