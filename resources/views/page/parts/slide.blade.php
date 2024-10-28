@section('style_slide')
<link rel="stylesheet" href="{{ asset('secutech/swiper.min.css') }}" media="all">
@endsection

@section('content_slide')
<!-- Slider -->
<header class="slider">
    <div class="main-slider swiper">
        <div class="swiper-wrapper" style="transition-duration: 0ms;">
            <!-- PRIMER SLIDE -->
            @forelse ($carouseles as $carousel)
            <div class="swiper-slide">
                <div class="slide-image" data-background="{{ asset('/img/slider' . $carousel->img_name) }}"></div>
                <div class="container ff">
                    <h1>{{$carousel->titulo}}<br> {{$carousel->titulo2}} </h1>
                    <p>{{$carousel->descripcion}} </p>
                    <div class="bosluk44"></div>
                    @isset($carousel->texto)
                    <a href="{{$carousel->link}}" class="btn-3">
                        <span class="btnn3">{{$carousel->texto}}</span>
                    </a>
                    @endisset
                </div>
            </div>
            @empty
            <div class="swiper-slide">
                <div class="slide-image" data-background="{{ asset('/secutech/slider-secutech-3.jpg') }}"></div>
                <div class="container ff">
                    <h1>Plantilla<br> No hay registro para mostrar </h1>
                    <p>Se muestra este texto cuando no se tienen registros para mostrar. </p>
                    <div class="bosluk44"></div>
                    <a href="{{URL::current()}}" class="btn-3">
                        <span class="btnn3">Ver detalles</span>
                    </a>
                </div>
            </div>
            @endforelse 
        </div>    
    </div>
    <div class="button-prev"><p class="dz">❮</p></div>
    <div class="button-next"><p class="dz">❯</p></div>
</header>
<!-- Info Services Section -->
<section class="info-featured">
    <div class="container">
        <div class="row ff">

            @forelse ($categorys->take(4) as $category)
            <div class="col-lg-3 ds wow zoomIn" data-wow-delay="0.5s" >
                <div class="dep align-center">
                    <div class="or56">
                        <div class="iconwr or56"><p class="dzv"><i class="fx-{{ $category->icon }}"></i></p></div>
                        <div class="bosluk333"></div>
                        <h3 class="prongl">{{ $category->name }}</h3>
                        <h4 class="infostextgl">{{ $category->description }}</h4>
                        <a class="btn-3" href="{{ route('services') }}"><p class="btnn2">Ver mas</p></a>
                    </div>
                </div>
            </div>
            @empty
             <div class="col-lg-3 ds wow zoomIn" data-wow-delay="0.5s" >
                <div class="dep align-center">
                    <div class="or56">
                        <div class="iconwr or56"><p class="dzv"><i class="fx-camara-domo"></i></p></div>
                        <div class="bosluk333"></div>
                        <h3 class="prongl">Plantilla</h3>
                        <h4 class="infostextgl">Sin categorías para mostrar.</h4>
                        <a class="btn-3" href="#"><p class="btnn2">Ver mas</p></a>
                    </div>
                </div>
            </div>
            @endforelse
           
        </div>
    </div>
    </section>
@endsection

@section('script_slide')
<script src="{{ asset('secutech/swiper.min.js') }}" id="swiper-js"></script>
@endsection
