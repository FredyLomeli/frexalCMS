@extends('layouts.main')

@section('header')
<h1>Listado de preguntas</h1>
@endsection

@section('links')
<li class="nav-item d-none d-sm-inline-block">
    <a href="{{ route('ask.create') }}" class="nav-link">Nuevo</a>
</li>
<li class="nav-item d-none d-sm-inline-block">
    <a href="{{ route('edit.imgasks') }}" class="nav-link">Cargar Imagen</a>
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
                    <th>Preguntas</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($asks as $ask)
                    <tr>
                        <td>{{ $ask->id }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($ask->question, 25, '...') }}</td>
                        <td>
                            <a href="{{ route('ask.edit', $ask) }}"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('ask.delete', $ask) }}"
                                onclick="event.preventDefault();document.getElementById('delete_{{ $ask->id }}').submit();">
                                <i class="nav-icon fas fa-trash"></i>
                            </a>
                            <form id="delete_{{ $ask->id }}" action="{{ route('ask.delete', $ask) }}"
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
