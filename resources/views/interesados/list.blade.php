@extends('layouts.main')

@section('header')
<h1>Listado de Interesados</h1>
@endsection

@section('links')
@endsection

@section('content')
@include('messages.info')
@include('messages.warning')
@include('messages.list_errors')

    <!-- /.row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Detalle</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($interesados as $interesado)
                        <tr>
                            <td>{{ $interesado->id }}</td>
                            <td>{{ $interesado->nombre }}</td>
                            <td>{{ $interesado->email }}</td>
                            <td>{{ $interesado->telefono }}</td>
                            <td>{{ $interesado->detalles }}</td>
                            <td>{{ $interesado->created_at }}</td>
                            <td>
                                <a href="{{ route('interesados.show', $interesado) }}"><i class="fas fa-eye"></i></a>&nbsp;&nbsp;
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="4"><p>No se tiene registros</p></td></tr>
                    @endforelse
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
            </div>
        <!-- /.card -->
        </div>
    </div>

    <!-- formulario para actualizar los email que reciben las notificaciones -->
    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('email.update') }}">
        {{ method_field('PUT') }} {{csrf_field()}}
        <div class="card-body">
            <div class="form-group row">
                <label for="email" class="col-sm-7 col-form-label">Emails que reciben las notificaciones (separa cada email con coma ","):</label>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" value="{{ old('email', $emails) }}" id="email" 
                        placeholder="Emails" required>
                    @if ($errors->has('email'))
                        <small class="text-center text-danger">{{ $errors->first('name') }}</small>
                    @endif
                </div>
                <button type="submit" class="btn btn-info float-right col-sm-2">Guardar</button>
            </div>
        </div>
    </form>
@endsection
