@extends('layouts.front')
@section('title', "Inicio - ")
@section('styles')
<link type="text/css" rel="stylesheet" href="{{ asset('lib/carousel/style.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('lib/carousel/responsive.css') }}" />
@endsection
@section('content')

<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
    <!-- Indicators -->
    @foreach ($carouseles as $carousel)
        @if ($loop->index == 0)
        <li data-target="#demo" data-slide-to="{{$loop->index}}" class="active"></li>
        @else
        <li data-target="#demo" data-slide-to="{{$loop->index}}"></li>
        @endif
    @endforeach
    </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
    @foreach ($carouseles as $carousel)
        @if ($loop->index == 0 && $carousel->video == 0)
        <div class="carousel-item active">
            <img class="slider_img" src="{{ asset('/img/slider' . $carousel->img_name) }}" alt="{{$carousel->title}}">
            <div class="carousel-caption">
                <div class="slider_text">
                    <h2>{{$carousel->titulo}}</h2>
                    <p>{{$carousel->descripcion}}</p>
                    @isset($carousel->texto)
                    <a href="{{$carousel->link}}" class="custom_btn">{{$carousel->texto}}</a>
                    @endisset
                </div>
            </div>
        </div>
        @elseif($loop->index == 0 && $carousel->video == 1)
        <div class="carousel-item active">
            <div class="embed-responsive embed-responsive-21by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"{{$carousel->img_name}}></iframe>
            </div>
            <div class="carousel-caption">
                <div class="slider_text">
                    <h2>{{$carousel->titulo}}</h2>
                    <p>{{$carousel->descripcion}}</p>
                    @isset($carousel->texto)
                    <a href="{{$carousel->link}}" class="custom_btn">{{$carousel->texto}}</a>
                    @endisset
                </div>
            </div>
        </div>
        @elseif($loop->index != 0 && $carousel->video == 0)
        <div class="carousel-item">
            <img class="slider_img" src="{{ asset('/img/slider' . $carousel->img_name) }}" alt="{{$carousel->title}}">
            <div class="carousel-caption">
                <div class="slider_text">
                    <h2>{{$carousel->titulo}}</h2>
                    <p>{{$carousel->descripcion}}</p>
                    @isset($carousel->texto)
                    <a href="{{$carousel->link}}" class="custom_btn">{{$carousel->texto}}</a>
                    @endisset
                </div>
            </div>
        </div>
        @elseif($loop->index != 0 && $carousel->video == 1)
        <div class="carousel-item">
            <div class="embed-responsive embed-responsive-21by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"{{$carousel->img_name}}></iframe>
            </div>
            <div class="carousel-caption">
                <div class="slider_text">
                    <h2>{{$carousel->titulo}}</h2>
                    <p>{{$carousel->descripcion}}</p>
                    @isset($carousel->texto)
                    <a href="{{$carousel->link}}" class="custom_btn">{{$carousel->texto}}</a>
                    @endisset
                </div>
            </div>
        </div>
        @endif
    @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>

</div>




<!-- Hero Start -->
<!--<div class="hero">
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

@section('script')
@endsection
