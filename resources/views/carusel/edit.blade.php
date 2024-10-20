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
        <div class="card" id="app">
            <form class="form-horizontal" method="post" enctype="multipart/form-data"
                action="{{ route('carrusel.update', $carousel) }}">
                {{ method_field('PUT') }} {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="titulo" class="col-sm-3 col-form-label">Titulo:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="titulo"
                                value="{{ old('titulo',$carousel->titulo) }}" id="titulo"
                                placeholder="Titulo" required>
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
                    <div class="form-group row" v-if="video == 0">
                        <div class="col-sm-9 offset-md-3">
                            <input type="checkbox" name="video" value="1" v-model="video"/>
                            <label for="video">Video</label>
                            @if ($errors->has('video'))
                                <small class="text-center text-danger">{{ $errors->first('video') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row" v-if="video == 1">
                        <label for="file_img" class="col-sm-3 col-form-label">Video:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="file_img"
                                value="{{ old('file_img') }}" id="file_img"
                                placeholder="Link de Youtube" required>
                            @if ($errors->has('file_img'))
                                <small class="text-center text-danger">{{ $errors->first('file_img') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row" v-if="video != 1">
                        <label for="file_img" class="col-sm-3 col-form-label">Selecciona una imagen: (Se recomienda 1750px x 1000px)</label>
                        <div class="col-sm-6">
                            <input type="file" class="form-control" name="file_img"
                                value="{{ old('file_img') }}" required
                                id="file_img" placeholder="Selecciona una imagen">
                            @if ($errors->has('file_img'))
                                <small class="text-center text-danger">{{ $errors->first('file_img') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="texto" class="col-sm-3 col-form-label">Boton:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="texto"
                                value="{{ old('texto',$carousel->texto) }}" id="texto"
                                placeholder="Texto del boton">
                            @if ($errors->has('texto'))
                                <small class="text-center text-danger">{{ $errors->first('texto') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="link" class="col-sm-3 col-form-label">link:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="link"
                                value="{{ old('link',$carousel->link) }}" id="link"
                                placeholder="Enlace de la publicación">
                            @if ($errors->has('link'))
                                <small class="text-center text-danger">{{ $errors->first('link') }}</small>
                            @endif
                        </div>
                    </div>
                    @if ($carousel->video == 1)
                    <div class="form-group row">
                        <label for="file_img" class="col-sm-3 col-form-label">video actual:</label>
                        <iframe src="https://www.youtube.com/embed/{{ $carousel->img_name }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    @else
                    <div class="form-group row">
                        <label for="file_img" class="col-sm-3 col-form-label">Imagen actual:</label>
                        <img src="{{ asset('img/slider/' . $carousel->img_name) }}" style="width: 50%; height: 50% ;" >
                    </div>
                    @endif
                    
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

@section('script')
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
<script>
var vm = new Vue({
    el: '#app',
    data:{
        video:{{ ( $carousel->video == 1 ? 1: 'null') }},
    }
});
</script>
@endsection
