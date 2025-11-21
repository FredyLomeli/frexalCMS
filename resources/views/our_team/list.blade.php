@extends('layouts.main')

@section('header')
<h1>Listado personal del equipo</h1>
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
                    <th>Puesto</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($ourTeam as $team)
                    <tr>
                        <td>{{ $team->id }}</td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->puesto }}</td>
                        <td>
                            <a href="{{ route('ourTeam.show', base64_encode($team->id)) }}" target="_blank"> <i class="fas fa-eye"></i></a>
                            <a href="{{ route('ourTeam.edit', $team) }}"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('ourTeam.delete', $team) }}"
                                onclick="event.preventDefault();document.getElementById('delete_{{ $team->id }}').submit();">
                                <i class="nav-icon fas fa-trash"></i>
                            </a>
                            <form id="delete_{{ $team->id }}" action="{{ route('ourTeam.delete', $team) }}"
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
