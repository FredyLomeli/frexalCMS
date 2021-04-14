@extends('layouts.main')

@section('header')
<h1>Listado de Productos</h1>
@endsection

@section('links')
<li class="nav-item d-none d-sm-inline-block">
    <a href="{{ route('products.create') }}" class="nav-link">Nuevo</a>
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
                    <th>Categoria</th>
                    <th>Descripcion</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($productos as $products)
                    <tr>
                        <td>{{ $products->id }}</td>
                        <td>{{ substr($products->name,0,15) }}...</td>
                        <td>{{ $products->categoria }}</td>
                        <td>{{ substr($products->descripcion,0,20) }}...</td>
                        <td>
                            {{$products->meter_count}} &nbsp;<i class="fas fa-eye"></i>&nbsp;&nbsp;
                            <a href="{{ route('products.edit', $products) }}"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;
                            <a href="{{ route('products.delete', $products) }}"
                                onclick="event.preventDefault();document.getElementById('delete_{{ $products->id }}').submit();">
                                <i class="nav-icon fas fa-trash"></i>
                            </a>
                            <form id="delete_{{ $products->id }}" action="{{ route('products.delete', $products) }}"
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
