@section('style_slide')
<link rel="stylesheet" href="{{ asset('secutech/swiper.min.css') }}" media="all">
@endsection

@section('content_slide')
<!-- Slider -->
<header class="slider">
    <div class="main-slider swiper">
        <div class="swiper-wrapper" style="transition-duration: 0ms;">
            <!-- PRIMER SLIDE -->
            <div class="swiper-slide">
                <div class="slide-image" data-background="{{ asset('secutech/slider-secutech-3.jpg') }}"></div>
                <div class="container ff">
                    <h1>El numero 1<br> Tracking Systems </h1>
                    <p>Control the entrances and exits of your employees. </p>
                    <div class="bosluk44"></div>
                    <a href="#" class="btn-3">
                        <span class="btnn3">Ver Detalles</span>
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-image" data-background="{{ asset('secutech/slider-secutech-3.jpg') }}"></div>
                <div class="container ff">
                    <h1>El numero 2 <br>
                    Security Systems </h1>
                    <p>We provide fast installation with our expert staff. </p>
                    <div class="bosluk44"></div>
                    <a href="#" class="btn-3">
                        <span class="btnn3">Learn More</span>
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-image" data-background="{{ asset('secutech/slider-secutech-3.jpg') }}"></div>
                <div class="container ff">
                    <h1>El numero 3 <br>
                    Tracking Systems </h1>
                    <p>Control the entrances and exits of your employees. </p>
                    <div class="bosluk44"></div>
                    <a href="#" class="btn-3">
                        <span class="btnn3">Learn more</span>
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-image" data-background="{{ asset('secutech/slider-secutech-3.jpg') }}"></div>
                <div class="container ff">
                    <h1>El numero 4 <br>
                    Security Systems </h1>
                    <p>We provide fast installation with our expert staff. </p>
                    <div class="bosluk44"></div>
                    <a href="#" class="btn-3">
                        <span class="btnn3">Learn More</span>
                    </a>
                </div>
            </div>
        </div>    
    </div>
    <div class="button-prev"><p class="dz">❮</p></div>
    <div class="button-next"><p class="dz">❯</p></div>
</header>
<!-- Info Services Section -->
<section class="info-featured">
    <div class="container">
        <div class="row ff">
            <div class="col-lg-3 ds wow zoomIn" data-wow-delay="0.5s" >
                <div class="dep">
                    <div class="or56">
                        <div class="iconwr or56"><p class="dzv"><i class="fx-seguridad-hogar"></i></p></div>
                        <div class="bosluk333"></div>
                        <h3 class="prongl">Home Security</h3>
                        <h4 class="infostextgl">Our home camera systems have high resolution and remote monitoring features.</h4>
                        <a class="btn-3" href="#"><p class="btnn2">Read More</p></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ds wow zoomIn" data-wow-delay="0.6s">
                <div class="dep">
                    <div class="or56">
                        <div class="iconwr or56"><p class="dzv"><i class="fx-alarma-cel"></i></p></div>
                        <div class="bosluk333"></div>
                        <h3 class="prongl">Camera Systems</h3>
                        <h4 class="infostextgl">Thanks to our smart notification feature, the scenario you want is instantly on your smartphone.</h4>
                        <a class="btn-3" href="#"><p class="btnn2">Read More</p></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ds wow fadeInLeft" data-wow-delay="0.7s">
                <div class="dep">
                    <div class="or56">
                        <div class="iconwr or56"><p class="dzv"><i class="fx-alarma"></i></p></div>
                        <div class="bosluk333"></div>
                        <h3 class="prongl">Alarm Systems</h3>
                        <h4 class="infostextgl">Thanks to our high security alarm system, it sends a signal to the alarm center in case of danger.</h4>
                        <a class="btn-3" href="#"><p class="btnn2">Read More</p></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ds wow zoomIn" data-wow-delay="0.8s">
                <div class="dep">
                    <div class="or56">
                        <div class="iconwr or56"><p class="dzv"><i class="fx-pluma-alarma"></i></p></div>
                        <div class="bosluk333"></div>
                        <h3 class="prongl">Barrier Systems</h3>
                        <h4 class="infostextgl">Parking barrier systems are ideal for the controlled passage of vehicles entering and exiting.</h4>
                        <a class="btn-3" href="#"><p class="btnn2">Read More</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection

@section('script_slide')
<script src="{{ asset('secutech/swiper.min.js') }}" id="swiper-js"></script>
@endsection
