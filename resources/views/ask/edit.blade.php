@extends('layouts.main')

@section('header')
<h1>Editando registro en Preguntas ID: {{ $ask->id }}</h1>
@endsection

@section('links')
<li class="nav-item d-none d-sm-inline-block">
    <a href="{{ route('ask.create') }}" class="nav-link">Nuevo</a>
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
                action="{{ route('ask.update', $ask) }}">
                {{ method_field('PUT') }} {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="question" class="col-sm-3 col-form-label">Pregunta:</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="question" rows="4" cols="50" id="question"
                                 required>{{ old('question',$ask->question) }}</textarea>
                            @if ($errors->has('question'))
                                <small class="text-center text-danger">{{ $errors->first('question') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="answer" class="col-sm-3 col-form-label">Respuesta:</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="answer" rows="4" cols="50" id="answer"
                                 required>{{ old('answer',$ask->answer) }}</textarea>
                            @if ($errors->has('answer'))
                                <small class="text-center text-danger">{{ $errors->first('answer') }}</small>
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
