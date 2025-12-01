@extends('layouts.main')

@section('header')
<h1>Editar Campo</h1>
@endsection

@section('content')
@include('messages.info')
@include('messages.warning')
@include('messages.list_errors')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Editando: {{ $detailsForms->name }}</h3>
            </div>
            
            {{-- La ruta debe apuntar al método update y pasar el ID del campo --}}
            <form class="form-horizontal" method="post" action="{{ route('cotizar.update', $detailsForms->id) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }} {{-- IMPORTANTE: Simula una petición PUT --}}
                
                <div class="card-body">
                    
                    {{-- 1. ETIQUETA (NAME) --}}
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Etiqueta (Label):</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name"
                                {{-- Prioridad: 1. Input antiguo (error), 2. Valor BD --}}
                                value="{{ old('name', $detailsForms->name) }}" 
                                id="name" placeholder="Ej: Color, Cantidad..." required>
                            
                            @if ($errors->has('name'))
                                <small class="text-center text-danger">{{ $errors->first('name') }}</small>
                            @endif
                        </div>
                    </div>

                    {{-- 2. TIPO DE CAMPO (TYPE) --}}
                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label">Tipo de dato:</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="type" id="type_selector" onchange="toggleOptions()">
                                <option value="text" {{ old('type', $detailsForms->type) == 'text' ? 'selected' : '' }}>Texto Libre (Input)</option>
                                <option value="select" {{ old('type', $detailsForms->type) == 'select' ? 'selected' : '' }}>Lista de Opciones (Combo Box)</option>
                            </select>

                            @if ($errors->has('type'))
                                <small class="text-center text-danger">{{ $errors->first('type') }}</small>
                            @endif
                        </div>
                    </div>

                    {{-- 3. OPCIONES (VALUES) --}}
                    {{-- Inicializamos la visibilidad basada en el valor actual --}}
                    <div class="form-group row {{ old('type', $detailsForms->type) == 'select' ? '' : 'd-none' }}" id="row_options">
                        <label for="values" class="col-sm-2 col-form-label">Opciones:</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="values" id="values" rows="3"
                                placeholder="Ej: Rojo, Azul, Verde (Separados por comas)">{{ old('values', $detailsForms->values) }}</textarea>
                            <small class="form-text text-muted">Ingresa las opciones separadas por una coma (,).</small>
                            
                            @if ($errors->has('values'))
                                <small class="text-center text-danger">{{ $errors->first('values') }}</small>
                            @endif
                        </div>
                    </div>

                    {{-- 4. VISIBILIDAD --}}
                    <div class="form-group row">
                        <div class="col-sm-2 col-form-label">Visible:</div>
                        <div class="col-sm-8">
                            <div class="form-check">
                                {{-- Verificamos si es true en la BD para marcarlo --}}
                                <input class="form-check-input" type="checkbox" name="visible" value="1" id="visible" 
                                    {{ old('visible', $detailsForms->visible) ? 'checked' : '' }}>
                                <label class="form-check-label" for="visible">
                                    Mostrar este campo en el formulario público
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <a href="{{ route('cotizar') }}" class="btn btn-default">Cancelar</a>
                    <button type="submit" class="btn btn-primary float-right">Actualizar Campo</button>
                </div>
                </form>
        </div>
    </div>
</div>

{{-- SCRIPT --}}
<script>
    function toggleOptions() {
        var selector = document.getElementById('type_selector');
        var rowOptions = document.getElementById('row_options');
        var inputValues = document.getElementById('values');

        if (selector.value === 'select') {
            rowOptions.classList.remove('d-none');
            inputValues.setAttribute('required', 'required');
        } else {
            rowOptions.classList.add('d-none');
            inputValues.removeAttribute('required');
        }
    }

    // Ejecutar al cargar la página para que se muestre/oculte según lo que venga de la BD
    document.addEventListener("DOMContentLoaded", function() {
        toggleOptions();
    });
</script>

@endsection