@extends('layouts.main')

@section('header')
<h1>Formulario cotizar</h1>
@endsection

@section('links')
<li class="nav-item d-none d-sm-inline-block">
    <a href="{{ route('cotizar.create') }}" class="nav-link">Nuevo</a>
</li>
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
                            <th style="width: 50px;"></th> 
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Valor</th>
                            <th>Visible</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="lista-cotizacion">
                    @forelse ($detalleForm as $detalleF)
                        <tr data-id="{{ $detalleF->id }}">
                            <td class="handle" style="cursor: move; text-align: center; vertical-align: middle;">
                                <i class="fas fa-arrows-alt text-muted"></i>
                            </td>
                            <td>{{ $detalleF->id }}</td>
                            <td>{{ $detalleF->name }}</td>
                            <td>{{ $detalleF->type }}</td>
                            <td>{{ $detalleF->value }}</td>
                            <td>{{ ($detalleF->visible == 1 ? "SI":"NO") }}</td>
                            <td>
                                    <a href="{{ route('cotizar.edit', $detalleF) }}"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;
                                    <a href="{{ route('cotizar.delete', $detalleF) }}"
                                    onclick="event.preventDefault();document.getElementById('delete_{{ $detalleF->id }}').submit();">
                                        <i class="nav-icon fas fa-trash"></i>
                                    </a>
                                    <form id="delete_{{ $detalleF->id }}" action="{{ route('cotizar.delete', $detalleF) }}"
                                        method="POST" style="display: none;">{{ method_field('DELETE') }} {{csrf_field()}}
                                    </form>
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

            <div class="card">
                <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('cotizar.img') }}">
                    {{ method_field('PUT') }} {{csrf_field()}}
                    <div class="form-group row">
                        <label for="file_img" class="col-sm-3 col-form-label">Selecciona una imagen: (Se recomienda 466px x 344px)</label>
                        <div class="col-sm-6">
                            <input type="file" class="form-control" name="file_img"
                                value="{{ old('file_img') }}"
                                id="file_img" placeholder="Selecciona una imagen">
                            @if ($errors->has('file_img'))
                                <small class="text-center text-danger">{{ $errors->first('file_img') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="file_img" class="col-sm-3 col-form-label">Imagen actual:</label>
                        <img src="{{ asset('img/about' . $img_cotizar) }}" style="width: 30%; height: 30% ;" >
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info float-right">Guardar</button>
                    </div>
                </form>
            </div>
        <!-- /.card -->
        </div>
    </div>


@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var el = document.getElementById('lista-cotizacion');
        
        var sortable = Sortable.create(el, {
            animation: 150,
            handle: '.handle', // Solo se mueve si arrastran desde el icono, no desde toda la fila
            
            onEnd: function (evt) {
                // Obtenemos el nuevo orden de los IDs
                var orden = sortable.toArray();

                // Enviamos a Laravel
                fetch("{{ route('cotizar.reorder') }}", { // Crea esta ruta
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({ orden: orden })
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Orden actualizado');
                    // Aquí puedes poner un toastr.success('Orden actualizado')
                })
                .catch(error => console.error('Error:', error));
            }
        });
    });
</script>
@endsection
