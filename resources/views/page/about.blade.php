@extends('layouts.front')
@section('title', 'Quienes somos - ')
@section('styles')
    <link type="text/css" rel="stylesheet" href="{{ asset('lib/carousel/style.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('lib/carousel/responsive.css') }}" />
@endsection
@section('content')

    @include('page.nosotros')
    <!-- Story Start -->
    <div class="story">
        <div class="container-fluid">
            <div class="section-header">
                <h2>Misión Visión y Valores</h2>
            </div>
        </div>
    </div>

    <!-- Service Row Start -->
    <div class="service-row">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 d-md-none d-block">
                    <div class="service-row-img">
                        <img src="{{ asset('img/about/' . $informacion['img_mision']) }}" alt="mision">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-row-text">
                        <h2 class="section-title">Misión</h2>
                        <p>{{ $informacion['mision'] }}</p>
                    </div>
                </div>
                <div class="col-md-6 d-md-block d-none">
                    <div class="service-row-img">
                        <img src="{{ asset('img/about/' . $informacion['img_mision']) }}" alt="mision">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Row End -->

    <!-- Service Row Start -->
    <div class="service-row">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="service-row-img">
                        <img src="{{ asset('img/about/' . $informacion['img_vision']) }}" alt="vision">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-row-text">
                        <h2 class="section-title">Visión</h2>
                        <p>{{ $informacion['vision'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Row End -->

    <!-- Service Row Start -->
    <div class="service-row">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 d-md-none d-block">
                    <div class="service-row-img">
                        <img src="{{ asset('img/about/' . $informacion['img_valores']) }}" alt="valores">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-row-text">
                        <h2 class="section-title">Valores</h2>
                        @for ($i = 0; $i < sizeof($informacion['valores']); $i++)
                            @if ($informacion['valores'][$i] != null) <p><i
                            class="fa fa-check"></i> {{ $informacion['valores'][$i] }}</p> @endif
                        @endfor
                    </div>
                </div>
                <div class="col-md-6 d-md-block d-none">
                    <div class="service-row-img">
                        <img src="{{ asset('img/about/' . $informacion['img_valores']) }}" alt="valores">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Row End -->

@endsection
