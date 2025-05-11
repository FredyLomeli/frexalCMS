@extends('layouts.main')

@section('header')
<h1>Editar video descriptivo.</h1>
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
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('update.video') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Titulo 1:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title"
                                value="{{ old('title', $data['title']) }}"
                                id="title" placeholder="Titulo # 1" required>
                            @if ($errors->has('title'))
                                <small class="text-center text-danger">{{ $errors->first('title') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title2" class="col-sm-2 col-form-label">Titulo 2:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title2"
                                value="{{ old('title2', $data['title2']) }}"
                                id="title2" placeholder="Titulo # 2" required>
                            @if ($errors->has('title2'))
                                <small class="text-center text-danger">{{ $errors->first('title2') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="link" class="col-sm-2 col-form-label">Link YouTube:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="link"
                                value="{{ old('link', $data['link']) }}"
                                id="link" placeholder="https://www.youtube.com/ejemplo" required>
                            @if ($errors->has('link'))
                                <small class="text-center text-danger">{{ $errors->first('link') }}</small>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="file_img" class="col-sm-3 col-form-label">Selecciona una imagen: (Se recomienda 778px x 446px)</label>
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
                        <img src="{{ asset('img/about/' . $data['img_video']) }}" style="width: 50%; height: 50% ;" >
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
