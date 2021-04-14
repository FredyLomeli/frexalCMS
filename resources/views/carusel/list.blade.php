@extends('layouts.main')

@section('header')
<h1>Listado de imagenes en Carrusel</h1>
@endsection

@section('links')
<li class="nav-item d-none d-sm-inline-block">
    <a href="{{ route('carrusel.create') }}" class="nav-link">Nuevo</a>
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
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($carouseles as $carousel)
                    <tr>
                        <td>{{ $carousel->id }}</td>
                        <td>{{ $carousel->titulo }}</td>
                        <td>{{ $carousel->descripcion }}</td>
                        <td>
                            <a href="{{ route('carrusel.edit', $carousel) }}"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('carrusel.delete', $carousel) }}"
                                onclick="event.preventDefault();document.getElementById('delete_{{ $carousel->id }}').submit();">
                                <i class="nav-icon fas fa-trash"></i>
                            </a>
                            <form id="delete_{{ $carousel->id }}" action="{{ route('carrusel.delete', $carousel) }}"
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
        <!-- /.card -->
        </div>
    </div>
@endsection
