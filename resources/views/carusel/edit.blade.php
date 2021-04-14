@extends('layouts.main')

@section('header')
<h1>Editando registro en carrusel ID: {{ $carousel->id }}</h1>
@endsection

@section('content')
@include('messages.info')
@include('messages.warning')
@include('messages.list_errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <form class="form-horizontal" method="post" enctype="multipart/form-data"
                action="{{ route('carrusel.update', $carousel) }}">
                {{ method_field('PUT') }} {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="titulo" class="col-sm-3 col-form-label">Titulo:</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="titulo" rows="4" cols="50" id="titulo"
                                 required>{{ old('titulo',$carousel->titulo) }}</textarea>
                            @if ($errors->has('titulo'))
                                <small class="text-center text-danger">{{ $errors->first('titulo') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descripcion" class="col-sm-3 col-form-label">Descripcion:</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="descripcion" rows="4" cols="50" id="descripcion"
                                 required>{{ old('descripcion',$carousel->descripcion) }}</textarea>
                            @if ($errors->has('descripcion'))
                                <small class="text-center text-danger">{{ $errors->first('descripcion') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="file_img" class="col-sm-3 col-form-label">Selecciona una imagen: (Se recomienda 1750px x 1000px)</label>
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
                        <img src="{{ asset('img/slider/' . $carousel->img_name) }}" style="width: 50%; height: 50% ;" >
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
