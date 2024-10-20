@extends('layouts.main')

@section('header')
<h1>Editando Categoria: {{ $category->id }}</h1>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('lib/frexalicon/styles.css') }}">
@endsection

@section('links')
<li class="nav-item d-none d-sm-inline-block">
    <a href="{{ route('category.create') }}" class="nav-link">Nuevo</a>
</li>
@endsection

@section('content')
@include('messages.info')
@include('messages.warning')
@include('messages.list_errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <form class="form-horizontal" method="post" enctype="multipart/form-data"
                action="{{ route('category.update', $category) }}">
                {{ method_field('PUT') }} {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="name"
                                value="{{ old('name',$category->name) }}" id="name"
                                placeholder="Categoria" required>
                            @if ($errors->has('name'))
                                <small class="text-center text-danger">{{ $errors->first('name') }}</small>
                            @endif
                        </div>
                        <label for="icon" class="col-sm-1 col-form-label">Icono:</label>
                        <div class="input-group col-sm-2">
                            <input type="text" class="form-control" name="icon"
                                value="{{ old('icon', $category->icon) }}" id="icon"
                                placeholder="icono" required>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fx-{{ $category->icon }}"></i>
                                </span>
                            </div>
                            @if ($errors->has('icon'))
                                <small class="text-center text-danger">{{ $errors->first('icon') }}</small>
                            @endif
                        </div>
                        <div class="col-sm-1">
                            <a href="{{ route('icons') }}" target="_blank" class="btn btn-info"><i class="fa fa-icons"></i></a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Descripción:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="description" rows="4" cols="50" id="description"
                                 required>{{ old('description', $category->description) }}</textarea>
                            @if ($errors->has('description'))
                                <small class="text-center text-danger">{{ $errors->first('description') }}</small>
                            @endif
                        </div>
                    </div>
                    <!--<div class="form-group row">
                        <label for="file_img" class="col-sm-3 col-form-label">Selecciona una imagen: (Se recomienda 800px x 640px)</label>
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
                        <img src="{{ asset('img/portfolio/' . $category->img_name) }}" style="width: 50%; height: 50% ;" >
                    </div>-->
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
