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


<!-- About Start -->
<div class="about">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('img/about/'.$informacion['img_nosotros']) }}" alt="welcome">
            </div>
            <div class="col-md-6">
                <h2 class="section-title">Conocenos</h2>
                <p>{{ $informacion['nosotros'] }}</p>
                <a class="btn" href="">Conocemos mas PENDIENTE</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="service">
    <div class="container-fluid">
        <div class="section-header">
            <h2>Nuestros Servicios</h2>
            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium ornare velit non</p>-->
        </div>
        <div class="row">
            @forelse ($categorys as $category)
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <h3>{{$category->name}}</h3>
                    <img src="{{ asset('img/portfolio'.$category->img_name) }}" alt="Service">
                    <p>{{$category->description}}</p>
                </div>
            </div>
            @empty
            @endforelse
        </div>
    </div>
</div>
<!-- Service End -->


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
