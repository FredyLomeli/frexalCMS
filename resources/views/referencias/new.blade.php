@extends('layouts.main')

@section('header')
<h1>Nueva Referencia</h1>
@endsection

@section('content')
@include('messages.info')
@include('messages.warning')
@include('messages.list_errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('referencia.store') }}">
                {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Cliente:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="name"
                                value="{{ old('name') }}" id="name"
                                placeholder="Cliente" required>
                            @if ($errors->has('name'))
                                <small class="text-center text-danger">{{ $errors->first('name') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="file_img" class="col-sm-3 col-form-label">Selecciona una imagen: (Se recomienda 800px x 640px)</label>
                        <div class="col-sm-6">
                            <input type="file" class="form-control" name="file_img"
                                value="{{ old('file_img') }}" required
                                id="file_img" placeholder="Selecciona una imagen">
                            @if ($errors->has('file_img'))
                                <small class="text-center text-danger">{{ $errors->first('file_img') }}</small>
                            @endif
                        </div>
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
