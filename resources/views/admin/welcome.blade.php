@extends('layouts.main')

@section('header')
<h1>Editar Mensaje de Bienvenida.</h1>
@endsection

@section('content')
@include('messages.info')
@include('messages.warning')
@include('messages.list_errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <form class="form-horizontal" method="post" enctype="multipart/form-data"
                action="{{ route('update.welcome') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Titulo:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="title"
                                value="{{ old('title', $data['title']) }}"
                                id="title" placeholder="title" required>
                            @if ($errors->has('title'))
                                <small class="text-center text-danger">{{ $errors->first('title') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Descripción:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="description" rows="4" cols="50" id="description"
                                 required>{{ old('description', $data['description']) }}</textarea>
                            @if ($errors->has('description'))
                                <small class="text-center text-danger">{{ $errors->first('description') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="boton" class="col-sm-2 col-form-label">Boton:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="boton"
                                value="{{ old('boton', $data['boton']) }}"
                                id="boton" placeholder="boton" required>
                            @if ($errors->has('boton'))
                                <small class="text-center text-danger">{{ $errors->first('boton') }}</small>
                            @endif
                        </div>
                        <label for="link" class="col-sm-1 col-form-label">Link:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="link"
                                value="{{ old('link', $data['link']) }}"
                                id="link" placeholder="link" required>
                            @if ($errors->has('link'))
                                <small class="text-center text-danger">{{ $errors->first('link') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="file_img" class="col-sm-3 col-form-label">Selecciona una imagen: (Se recomienda 550px x 340px)</label>
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
                        <img src="{{ asset('img/about/' . $data['img']) }}" style="width: 50%; height: 50% ;" >
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
