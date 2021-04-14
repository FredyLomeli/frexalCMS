@extends('layouts.main')

@section('header')
<h1>Registro Nuevo usuario</h1>
@endsection

@section('content')
@include('messages.info')
@include('messages.warning')
@include('messages.list_errors')

<form class="form-horizontal" method="post" enctype="multipart/form-data"
action="{{ env('APP_URL') }}/register">
{{csrf_field()}}
<div class="card-body">
    <div class="form-group row">
        <label for="name" class="col-sm-3 col-form-label">Nombre:</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="name"
                value="{{ old('name') }}" id="name"
                placeholder="Nombre usuario" required>
            @if ($errors->has('name'))
                <small class="text-center text-danger">{{ $errors->first('name') }}</small>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-3 col-form-label">Correo:</label>
        <div class="col-sm-9">
            <input type="email" class="form-control" name="email"
                value="{{ old('email') }}" id="email"
                placeholder="Email" required>
            @if ($errors->has('email'))
                <small class="text-center text-danger">{{ $errors->first('email') }}</small>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-3 col-form-label">Contraseña:</label>
        <div class="col-sm-9">
            <input type="password" class="form-control" name="password"
                value="{{ old('password') }}" id="password"
                placeholder="Contraseña" required>
            @if ($errors->has('password'))
                <small class="text-center text-danger">{{ $errors->first('password') }}</small>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="password-confirm" class="col-sm-3 col-form-label">Confirmar Contraseña:</label>
        <div class="col-sm-9">
            <input type="password" class="form-control" name="password_confirmation"
                value="{{ old('password-confirm') }}" id="password-confirm"
                placeholder="Confirmar contraseña" required>
            @if ($errors->has('password-confirm'))
                <small class="text-center text-danger">{{ $errors->first('password-confirm') }}</small>
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

@endsection
