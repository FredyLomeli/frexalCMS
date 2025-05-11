@extends('layouts.main')

@section('header')
<h1>Editar Mensaje de Bienvenida.</h1>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('lib/frexalicon/styles.css') }}">
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
                        <label for="title" class="col-sm-2 col-form-label">Titulo 1:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="title"
                                value="{{ old('title', $data['title']) }}"
                                id="title" placeholder="Titulo # 1" required>
                            @if ($errors->has('title'))
                                <small class="text-center text-danger">{{ $errors->first('title') }}</small>
                            @endif
                        </div>
                        <label for="title2" class="col-sm-2 col-form-label">Titulo 2:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="title2"
                                value="{{ old('title2', $data['title2']) }}"
                                id="title2" placeholder="Titulo # 2" required>
                            @if ($errors->has('title2'))
                                <small class="text-center text-danger">{{ $errors->first('title2') }}</small>
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
                        <label for="message1" class="col-sm-1 col-form-label">Mensaje 1:</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="message1"
                                value="{{ old('message1', $data['message1']) }}"
                                id="message1" placeholder="Mensaje # 1" required>
                            @if ($errors->has('message1'))
                                <small class="text-center text-danger">{{ $errors->first('message1') }}</small>
                            @endif
                        </div>
                        <label for="description1" class="col-sm-2 col-form-label">Información 1:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="description1"
                                value="{{ old('description1', $data['description1']) }}"
                                id="description1" placeholder="Información # 1" required>
                            @if ($errors->has('description1'))
                                <small class="text-center text-danger">{{ $errors->first('description1') }}</small>
                            @endif
                        </div>
                        <label for="icon1" class="col-sm-1 col-form-label">Icono 1:</label>
                        <div class="input-group col-sm-2">
                            <input type="text" class="form-control" name="icon1"
                                value="{{ old('icon1', $data['icon1']) }}"
                                id="icon1" placeholder="Icono 1" required>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fx-{{ $data['icon1'] }}"></i>
                                </span>
                            </div>
                            @if ($errors->has('icon1'))
                                <small class="text-center text-danger">{{ $errors->first('icon1') }}</small>
                            @endif
                        </div>
                        <div class="col-sm-1">
                            <a href="{{ route('icons') }}" target="_blank" class="btn btn-info"><i class="fa fa-icons"></i></a>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="message2" class="col-sm-1 col-form-label">Mensaje 2:</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="message2"
                                value="{{ old('message2', $data['message2']) }}"
                                id="message2" placeholder="Mensaje # 2" required>
                            @if ($errors->has('message2'))
                                <small class="text-center text-danger">{{ $errors->first('message2') }}</small>
                            @endif
                        </div>
                        <label for="description2" class="col-sm-2 col-form-label">Información 2:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="description2"
                                value="{{ old('description2', $data['description2']) }}"
                                id="description2" placeholder="Información # 2" required>
                            @if ($errors->has('description2'))
                                <small class="text-center text-danger">{{ $errors->first('description2') }}</small>
                            @endif
                        </div>
                        <label for="icon2" class="col-sm-1 col-form-label">Icono 2:</label>
                        <div class="input-group col-sm-2">
                            <input type="text" class="form-control" name="icon2"
                                value="{{ old('icon2', $data['icon2']) }}"
                                id="icon2" placeholder="Icono 2" required>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fx-{{ $data['icon2'] }}"></i>
                                </span>
                            </div>
                            @if ($errors->has('icon2'))
                                <small class="text-center text-danger">{{ $errors->first('icon2') }}</small>
                            @endif
                        </div>
                        <div class="col-sm-1">
                            <a href="{{ route('icons') }}" target="_blank" class="btn btn-info"><i class="fa fa-icons"></i></a>
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
