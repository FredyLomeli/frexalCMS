@extends('layouts.front')
@section('title', $product->name." - ")
@section('content')

<!-- Service Row Start -->
<div class="service-row">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="service-row-img">
                    <img src="{{ asset('img/products/'.$product->img_name) }}" alt="servicio">
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-row-text">
                    <h2 class="section-title">{{ $product->name }}</h2>
                    <p>{{ $product->descripcion }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Row End -->
@endsection
