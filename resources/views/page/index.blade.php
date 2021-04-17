@extends('layouts.front')
@section('title', "Mirella Hernandez - ")
@section('content')

<!-- Hero Start -->
<div class="hero">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>{{ $informacion['welcome_title'] }}</h2>
                <p>{{ $informacion['welcome_description'] }}</p>
                <a class="btn" href="{{ $informacion['welcome_link'] }}">{{ $informacion['welcome_boton'] }}</a>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/about/'.$informacion['img_welcome']) }}" alt="welcome">
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

@include('page.nosotros')

@include('page.servicios')

<!-- FAQs Start -->
<div class="faqs">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="section-title">Preguntas Frecuentes</h2>
                <div id="accordion">
                    @forelse ($asks as $ask)
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link{{ ($loop->index == 0 ? ' collapsed' : '') }}" 
                                data-toggle="collapse" href="#collapse{{$ask->id}}" 
                                aria-expanded="{{ ($loop->index == 0 ? 'true' : 'false') }}">{{$ask->question}}</a>
                        </div>
                        <div id="collapse{{$ask->id}}" class="collapse{{ ($loop->index == 0 ? ' show' : '') }}"
                            data-parent="#accordion"><div class="card-body">{{$ask->answer}}</div>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>
                <a class="btn" href="">Ask more</a>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/about'.$informacion['img_asks']) }}" alt="Image">
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->

@endsection
