@extends('layouts.main')

@section('header')
<h1>Editando registro en Noticia ID: {{ $post->id }}</h1>
@endsection
@section('styles')
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('lib/summernote/summernote-bs4.min.css')}}">
@endsection

@section('content')
@include('messages.info')
@include('messages.warning')
@include('messages.list_errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <form class="form-horizontal" method="post" enctype="multipart/form-data"
                action="{{ route('posts.update', $post) }}">
                {{ method_field('PUT') }} {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">Título:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="title"
                                value="{{ old('title', $post->title) }}" id="title"
                                placeholder="Titulo" required>
                            @if ($errors->has('title'))
                                <small class="text-center text-danger">{{ $errors->first('title') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="brief" class="col-sm-3 col-form-label">Descripción corta:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="brief"
                                value="{{ old('brief', $post->brief) }}" id="brief"
                                placeholder="Descripción Corta" required>
                            @if ($errors->has('brief'))
                                <small class="text-center text-danger">{{ $errors->first('brief') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-sm-3 col-form-label">Contenido:</label>
                        <div class="col-sm-9">
                            <textarea name="content" id="summernote"
                                required>{{ old('content', $post->content) }}</textarea>
                            @if ($errors->has('content'))
                                <small class="text-center text-danger">{{ $errors->first('content') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="img_post" class="col-sm-3 col-form-label">Selecciona una imagen: (Se recomienda 800px x 640px)</label>
                        <div class="col-sm-6">
                            <input type="file" class="form-control" name="img_post"
                                value="{{ old('img_post') }}"
                                id="img_post" placeholder="Selecciona una imagen">
                            @if ($errors->has('img_post'))
                                <small class="text-center text-danger">{{ $errors->first('img_post') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="file_img" class="col-sm-3 col-form-label">Imagen actual:</label>
                        <img src="{{ asset('img/post' . $post->img_post) }}" style="width: 50%; height: 50% ;" >
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-9">
                            <input type="checkbox" name="ban_carusel" value="1" checked/>
                            <label for="ban_carusel">Publica esta noticia en carusel.</label>
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

@section('script')
<!-- Summernote -->
<script src="{{ asset('lib/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(document).ready(function() {
        // Summernote
        $('#summernote').summernote({
            lang: 'es-ES',               // default: 'en-US'
            placeholder: '¿A qué idea le daremos forma el día de hoy?',
            height: 300,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: true,                 // set focus to editable area after initializing summernote
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                //['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'video']],
                //['insert', ['link', 'picture', 'video']],
                //['view', ['fullscreen', 'codeview', 'help']]
            ],
        });
    });
</script>
@endsection
