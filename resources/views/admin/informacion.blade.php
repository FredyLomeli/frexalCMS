@extends('layouts.main')

@section('header')
<h1>INFORMACION GENERAL</h1>
@endsection

@section('content')
@include('messages.info')
@include('messages.warning')
@include('messages.list_errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <form class="form-horizontal" method="post" action="{{ route('save.info') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="nombre"
                                value="{{ old('nombre', $informacion['nombre']) }}"
                                id="nombre" placeholder="Nombre Empresa" required>
                            @if ($errors->has('nombre'))
                                <small class="text-center text-danger">{{ $errors->first('nombre') }}</small>
                            @endif
                        </div>
                        <label for="telefono" class="col-sm-2 col-form-label">Telefono Celular:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="telefono"
                                value="{{ old('telefono', $informacion['telefono']) }}"
                                id="telefono" placeholder="Telefono" required>
                            @if ($errors->has('telefono'))
                                <small class="text-center text-danger">{{ $errors->first('telefono') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefono_oficina" class="col-sm-2 col-form-label">Telefono Oficina:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="telefono_oficina"
                                value="{{ old('telefono_oficina', $informacion['telefono_oficina']) }}"
                                id="telefono_oficina" placeholder="telefono de oficina" required>
                            @if ($errors->has('telefono_oficina'))
                                <small class="text-center text-danger">{{ $errors->first('telefono_oficina') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="horario" class="col-sm-2 col-form-label">Horario:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="horario"
                                value="{{ old('horario', $informacion['horario']) }}"
                                id="horario" placeholder="Horario" required>
                            @if ($errors->has('horario'))
                                <small class="text-center text-danger">{{ $errors->first('horario') }}</small>
                            @endif
                        </div>
                        <label for="email" class="col-sm-2 col-form-label">Correo:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="email"
                                value="{{ old('email', $informacion['email']) }}"
                                id="email" placeholder="Correo Electronico" required>
                            @if ($errors->has('email'))
                                <small class="text-center text-danger">{{ $errors->first('email') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="direccion" class="col-sm-2 col-form-label">Direccion:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="direccion"
                                value="{{ old('direccion', $informacion['direccion']) }}"
                                id="direccion" placeholder="Direccion" required>
                            @if ($errors->has('direccion'))
                                <small class="text-center text-danger">{{ $errors->first('direccion') }}</small>
                            @endif
                        </div>
                        <label for="municipio" class="col-sm-2 col-form-label">Municipio:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="municipio"
                                value="{{ old('municipio', $informacion['municipio']) }}"
                                id="municipio" placeholder="Municipio" required>
                            @if ($errors->has('municipio'))
                                <small class="text-center text-danger">{{ $errors->first('municipio') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="estado" class="col-sm-2 col-form-label">Estado:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="estado"
                                value="{{ old('estado', $informacion['estado']) }}"
                                id="estado" placeholder="Estado" required>
                            @if ($errors->has('estado'))
                                <small class="text-center text-danger">{{ $errors->first('estado') }}</small>
                            @endif
                        </div>
                        <label for="no_whatsapp" class="col-sm-2 col-form-label"># Whast App:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="no_whatsapp"
                                value="{{ old('no_whatsapp', $informacion['no_whatsapp']) }}"
                                id="no_whatsapp" placeholder="# Whast App" required>
                            @if ($errors->has('no_whatsapp'))
                                <small class="text-center text-danger">{{ $errors->first('no_whatsapp') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="facebook" class="col-sm-2 col-form-label">Facebook:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="facebook"
                                value="{{ old('facebook', $informacion['facebook']) }}"
                                id="facebook" placeholder="Dirección Facebook" required>
                            @if ($errors->has('facebook'))
                                <small class="text-center text-danger">{{ $errors->first('facebook') }}</small>
                            @endif
                        </div>
                        <label for="instagram" class="col-sm-2 col-form-label">Instagram:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="instagram"
                                value="{{ old('instagram', $informacion['instagram']) }}"
                                id="instagram" placeholder="Dirección Instagram" required>
                            @if ($errors->has('instagram'))
                                <small class="text-center text-danger">{{ $errors->first('instagram') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descripcion_empresa" class="col-sm-2 col-form-label">Descripción:</label>
                        <div class="col-sm-4">
                            <textarea class="form-control" name="descripcion_empresa" rows="4" cols="50" id="descripcion_empresa"
                                 required>{{ old('descripcion_empresa', $informacion['descripcion_empresa']) }}</textarea>
                            @if ($errors->has('descripcion_empresa'))
                                <small class="text-center text-danger">{{ $errors->first('descripcion_empresa') }}</small>
                            @endif
                        </div>
                        <label for="informacion_footer" class="col-sm-2 col-form-label">Información:</label>
                        <div class="col-sm-4">
                            <textarea class="form-control" name="informacion_footer" rows="4" cols="50" id="informacion_footer"
                                 required>{{ old('informacion_footer', $informacion['informacion_footer']) }}</textarea>
                            @if ($errors->has('informacion_footer'))
                                <small class="text-center text-danger">{{ $errors->first('informacion_footer') }}</small>
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
