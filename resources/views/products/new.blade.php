@extends('layouts.main')

@section('header')
<h1>Nuevo Servicio / Producto</h1>
@endsection

@section('content')
@include('messages.info')
@include('messages.warning')
@include('messages.list_errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <form class="form-horizontal" method="post" enctype="multipart/form-data"
                action="{{ route('products.store') }}">
                {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="name"
                                value="{{ old('name') }}" id="name"
                                placeholder="Nombre producto" required>
                            @if ($errors->has('categoria'))
                                <small class="text-center text-danger">{{ $errors->first('categoria') }}</small>
                            @endif
                        </div>
                        <label for="categoria" class="col-sm-2 col-form-label">Categoria:</label>
                        <div class="col-sm-3">
                            <select class="custom-select @error('categoria') is-invalid @enderror" id="categoria" name="categoria">
                                <option value="0" {{ old('categoria') === '0' ? 'selected' : '' }}>Sin Categoria</option>
                            @forelse ($categorias as $categoria)
                                <option value="{{ $categoria['id'] }}" {{ old('categoria') === $categoria['id'] ? 'selected' : '' }}>{{ $categoria['name'] }}</option>
                            @empty
                            @endforelse
                            </select>
                            @if ($errors->has('categoria'))
                                <small class="text-center text-danger">{{ $errors->first('categoria') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descripcion_corta" class="col-sm-2 col-form-label">Descripción corta:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="descripcion_corta"
                                value="{{ old('descripcion_corta') }}" id="descripcion_corta"
                                placeholder="Descripción Corta" required>
                            @if ($errors->has('descripcion_corta'))
                                <small class="text-center text-danger">{{ $errors->first('descripcion_corta') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descripcion" class="col-sm-2 col-form-label">Descripción:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="descripcion" rows="4" cols="50" id="descripcion"
                                 required>{{ old('descripcion') }}</textarea>
                            @if ($errors->has('descripcion'))
                                <small class="text-center text-danger">{{ $errors->first('descripcion') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
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
