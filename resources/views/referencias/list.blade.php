@extends('layouts.main')

@section('header')
<h1>Listado de Referencias</h1>
@endsection

@section('links')
<li class="nav-item d-none d-sm-inline-block">
    <a href="{{ route('referencia.create') }}" class="nav-link">Nuevo</a>
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
                    <th>Cliente</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($referencias as $referencia)
                    <tr>
                        <td>{{ $referencia->id }}</td>
                        <td>{{ $referencia->name }}</td>
                        <td>
                            <a href="{{ route('referencia.edit', $referencia) }}"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;
                            <a href="{{ route('referencia.delete', $referencia) }}"
                                onclick="event.preventDefault();document.getElementById('delete_{{ $referencia->id }}').submit();">
                                <i class="nav-icon fas fa-trash"></i>
                            </a>
                            <form id="delete_{{ $referencia->id }}" action="{{ route('referencia.delete', $referencia) }}"
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
