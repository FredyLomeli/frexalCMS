@extends('layouts.main')

@section('header')
<h1>Nueva Categoria</h1>
@endsection

@section('content')
@include('messages.info')
@include('messages.warning')
@include('messages.list_errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <form class="form-horizontal" method="post" enctype="multipart/form-data"
                action="{{ route('category.store') }}">
                {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="name"
                                value="{{ old('name') }}" id="name"
                                placeholder="Categoria" required>
                            @if ($errors->has('name'))
                                <small class="text-center text-danger">{{ $errors->first('name') }}</small>
                            @endif
                        </div>
                        <label for="icon" class="col-sm-1 col-form-label">icono:</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="icon"
                                value="{{ old('icon') }}" id="icon"
                                placeholder="icono" required>
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
                                 required>{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                                <small class="text-center text-danger">{{ $errors->first('description') }}</small>
                            @endif
                        </div>
                    </div>
                    <!--<div class="form-group row">
                        <label for="file_img" class="col-sm-3 col-form-label">Selecciona una imagen: (Se recomienda 800px x 640px)</label>
                        <div class="col-sm-6">
                            <input type="file" class="form-control" name="file_img"
                                value="{{ old('file_img') }}" required
                                id="file_img" placeholder="Selecciona una imagen">
                            @if ($errors->has('file_img'))
                                <small class="text-center text-danger">{{ $errors->first('file_img') }}</small>
                            @endif
                        </div>
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
