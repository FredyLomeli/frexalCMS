@extends('layouts.main')

@section('header')
<h1>Listado de Categorias</h1>
@endsection

@section('links')
<li class="nav-item d-none d-sm-inline-block">
    <a href="{{ route('category.create') }}" class="nav-link">Nuevo</a>
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
            <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th style="width: 50px;"></th> 
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    
                    <tbody id="lista-categorias">
                        @forelse ($categorys as $category)
                            <tr data-id="{{ $category->id }}">
                                
                                <td class="handle" style="cursor: move; text-align: center; vertical-align: middle;">
                                    <i class="fas fa-arrows-alt text-muted"></i>
                                </td>

                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    {{$category->meter_count}} &nbsp;<i class="fas fa-eye"></i>&nbsp;&nbsp;
                                    <a href="{{ route('category.edit', $category) }}"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;
                                    
                                    <a href="{{ route('category.delete', $category) }}"
                                    onclick="event.preventDefault();document.getElementById('delete_{{ $category->id }}').submit();">
                                        <i class="nav-icon fas fa-trash"></i>
                                    </a>
                                    
                                    <form id="delete_{{ $category->id }}" action="{{ route('category.delete', $category) }}"
                                        method="POST" style="display: none;">{{ method_field('DELETE') }} {{csrf_field()}}
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="5"><p>No se tiene registros</p></td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
    </div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var el = document.getElementById('lista-categorias');
        
        var sortable = Sortable.create(el, {
            animation: 150,
            handle: '.handle', // Solo se mueve si arrastran desde el icono, no desde toda la fila
            
            onEnd: function (evt) {
                // Obtenemos el nuevo orden de los IDs
                var orden = sortable.toArray();

                // Enviamos a Laravel
                fetch("{{ route('category.reorder') }}", { // Crea esta ruta
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