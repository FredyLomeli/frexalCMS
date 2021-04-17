@extends('layouts.front')
@section('title', "Quienes somos - ")
@section('content')

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Acerca de nosotros</h2>
            </div>
            <div class="col-12">
                <a href="{{route('index')}}">Inicio</a>
                <a href="{{route('nosotros')}}">Nosotros</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

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
                    <img src="{{ asset('img/about/'.$informacion['img_mision']) }}" alt="mision">
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
                    <img src="{{ asset('img/about/'.$informacion['img_mision']) }}" alt="mision">
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
                    <img src="{{ asset('img/about/'.$informacion['img_vision']) }}" alt="vision">
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
                    <img src="{{ asset('img/about/'.$informacion['img_valores']) }}" alt="valores">
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-row-text">
                    <h2 class="section-title">Valores</h2>
                    @for ($i = 0; $i < sizeof($informacion['valores']); $i++)
                    @if ($informacion['valores'][$i] != null)
                    <p><i class="fa fa-check"></i> {{$informacion['valores'][$i]}}</p>
                    @endif
                    @endfor
                </div>
            </div>
            <div class="col-md-6 d-md-block d-none">
                <div class="service-row-img">
                    <img src="{{ asset('img/about/'.$informacion['img_valores']) }}" alt="valores">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Row End -->

<!-- Team Start -->
<div class="team">
    <div class="container-fluid">
        <div class="section-header">
            <h2>Our Team</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium ornare velit non</p>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-3 ">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-1.jpg" alt="Team">
                    </div>
                    <div class="team-text">
                        <h3>Member Name</h3>
                        <p>Designation</p>
                    </div>
                    <div class="team-social">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-pinterest"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 ">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-2.jpg" alt="Team">
                    </div>
                    <div class="team-text">
                        <h3>Member Name</h3>
                        <p>Designation</p>
                    </div>
                    <div class="team-social">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-pinterest"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 ">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-3.jpg" alt="Team">
                    </div>
                    <div class="team-text">
                        <h3>Member Name</h3>
                        <p>Designation</p>
                    </div>
                    <div class="team-social">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-pinterest"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 ">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-4.jpg" alt="Team">
                    </div>
                    <div class="team-text">
                        <h3>Member Name</h3>
                        <p>Designation</p>
                    </div>
                    <div class="team-social">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-pinterest"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

@endsection
