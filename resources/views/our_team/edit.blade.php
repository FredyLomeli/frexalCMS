@extends('layouts.main')

@section('header')
<h1>Editando registro - Personal de equipo: {{ $ourTeam->id }}</h1>
@endsection

@section('links')
<li class="nav-item d-none d-sm-inline-block">
    <a href="{{ route('ourTeam.create') }}" class="nav-link">Nuevo</a>
</li>
@endsection

@section('content')
@include('messages.info')
@include('messages.warning')
@include('messages.list_errors')
<div class="row">
    <div class="col-12">
        <div class="card" id="app">
            <form class="form-horizontal" method="post" enctype="multipart/form-data"
                action="{{ route('ourTeam.update', $ourTeam) }}">
                {{ method_field('PUT') }} {{csrf_field()}}
                <div class="card-body">                   
                    
                    <div class="row">    
                        <div class="col-sm-6">   
                            <div class="form-group row"> 
                                <label for="name" class="col-sm-4 col-form-label">Nombre:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name"
                                        value="{{ old('name', $ourTeam->name) }}" id="name"
                                        placeholder="Nombre" required>
                                    @if ($errors->has('name'))
                                        <small class="text-center text-danger">{{ $errors->first('name') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="apellidos" class="col-sm-4 col-form-label">Apellidos:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="apellidos"
                                        value="{{ old('apellidos', $ourTeam->apellidos) }}" id="apellidos"
                                        placeholder="Apellidos">
                                    @if ($errors->has('apellidos'))
                                        <small class="text-center text-danger">{{ $errors->first('apellidos') }}</small>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="puesto" class="col-sm-4 col-form-label">Puesto:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="puesto"
                                        value="{{ old('puesto', $ourTeam->puesto) }}" id="puesto"
                                        placeholder="Puesto">
                                    @if ($errors->has('puesto'))
                                        <small class="text-center text-danger">{{ $errors->first('puesto') }}</small>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefono" class="col-sm-4 col-form-label">Telefono:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="telefono"
                                        value="{{ old('telefono', $ourTeam->telefono) }}" id="telefono"
                                        placeholder="Telefono">
                                    @if ($errors->has('telefono'))
                                        <small class="text-center text-danger">{{ $errors->first('telefono') }}</small>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label">QR:</label>
                                <div class="col-sm-8" style="text-align: center;">
                                    {!!QrCode::size(140)->generate(route('ourTeam.show', base64_encode($ourTeam->id))) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label">link:</label>
                                <div class="col-sm-8" style="text-align: center;">
                                    <a href="{{ route('ourTeam.show', base64_encode($ourTeam->id)) }}" target="_blank" >{{ route('ourTeam.show', base64_encode($ourTeam->id)) }}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="celular" class="col-sm-2 col-form-label">Celular:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="celular"
                                value="{{ old('celular', $ourTeam->celular) }}" id="celular"
                                placeholder="Celular">
                            @if ($errors->has('celular'))
                                <small class="text-center text-danger">{{ $errors->first('celular') }}</small>
                            @endif
                        </div>
                        <label for="email" class="col-sm-2 col-form-label">E-mail:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="email"
                                value="{{ old('email', $ourTeam->email) }}" id="email"
                                placeholder="Correo electrónico">
                            @if ($errors->has('email'))
                                <small class="text-center text-danger">{{ $errors->first('email') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="web" class="col-sm-2 col-form-label">Link web:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="web"
                                value="{{ old('web', $ourTeam->web) }}" id="web"
                                placeholder="Link pagina web">
                            @if ($errors->has('web'))
                                <small class="text-center text-danger">{{ $errors->first('web') }}</small>
                            @endif
                        </div>
                        <label for="facebook" class="col-sm-2 col-form-label">Link Facebook:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="facebook"
                                value="{{ old('facebook', $ourTeam->facebook) }}" id="facebook"
                                placeholder="Link facebook">
                            @if ($errors->has('facebook'))
                                <small class="text-center text-danger">{{ $errors->first('facebook') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="twitter" class="col-sm-2 col-form-label">Link twitter:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="twitter"
                                value="{{ old('twitter', $ourTeam->twitter) }}" id="twitter"
                                placeholder="Link twitter">
                            @if ($errors->has('twitter'))
                                <small class="text-center text-danger">{{ $errors->first('twitter') }}</small>
                            @endif
                        </div>
                        <label for="instagram" class="col-sm-2 col-form-label">Link instagram:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="instagram"
                                value="{{ old('instagram', $ourTeam->instagram) }}" id="instagram"
                                placeholder="Link instagram">
                            @if ($errors->has('instagram'))
                                <small class="text-center text-danger">{{ $errors->first('instagram') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descripcion" class="col-sm-2 col-form-label">Descripcion:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="descripcion" rows="4" cols="50" id="descripcion">{{ old('descripcion', $ourTeam->descripcion) }}</textarea>
                            @if ($errors->has('descripcion'))
                                <small class="text-center text-danger">{{ $errors->first('descripcion') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="file_img" class="col-sm-3 col-form-label">Selecciona una imagen: (Se recomienda 360px x 414px)</label>
                        <div class="col-sm-6">
                            <input type="file" class="form-control" name="file_img" value="{{ old('file_img') }}"
                                id="file_img" placeholder="Selecciona una imagen">
                            @if ($errors->has('file_img'))
                                <small class="text-center text-danger">{{ $errors->first('file_img') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="file_img" class="col-sm-3 col-form-label">Imagen actual:</label>
                        <img src="{{ asset('img/team/' . $ourTeam->foto) }}" style="width: 50%; height: 50% ;" >
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
@endsection
