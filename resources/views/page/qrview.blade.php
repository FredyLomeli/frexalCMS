@extends('layouts.front')
@section('title')

<!-- contact -->
@include('page.parts.header')

@section('styles')
@endsection

@section('content')
    @yield('content_header')
<!--Markalar Alanı-->
<section class="markalar">
    <h6>.</h6>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="h-yazi-ortalama h-yazi-margin-orta-3">
                    <h2 class="h2-baslik-hizmetler-2 wow fadeInLeft">
                        Pagina para validar el funcionamiento para la generación de codigos QR
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">    
            <div class="col-lg-2">
                <div class="h-yazi-ortalama h-yazi-margin-kucuk-21 wow animated fadeInUp animated">
                    {!! QrCode::generate('Make me into a QrCode!! this testing for generate QR by view.'); !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
@endsection

