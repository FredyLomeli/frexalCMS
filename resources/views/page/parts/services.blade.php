@section('content_service')
<!--Services-->
<section class="sectionbars">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h2 class="h2-baslik-anasayfa-wtbb wow fade">Consulte nuestros servicios de sistemas de seguridad y cámaras de vigilancia.</h2>
                <p class="services-kutu2--wtbb wow fade animated">Producimos soluciones profesionales en sistemas de seguridad y cámaras de vigilancia.</p>
            </div>
            <div class="col-lg-2">
                <a class="btn-5" href="#all-services/"><p class="btnn2">Ver todos</p></a>
            </div>
        </div>
    </div>
</section>
<section class="serviceb-alani">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="carousel-classes swiper-container-horizontal">
                    <div class="swiper-wrapper">
                         @forelse ($productos as $producto)
                         <div class="swiper-slide wow animated">
                            <div class="box-style2 box-primary-color2">
                                <img class="efozel2" src="{{ asset('/img/products' . $producto->img_name ) }}" alt="">
                                <div class="bosluk333"></div>
                                <div class="descontent">
                                    <p class="services-kutu2--wts3 wow fade animated">{{ $producto->descripcion_corta }}</p>
                                    <div class="bosluk333"></div>
                                    <div class="orserv">
                                        <a class="btn-5" href="#alarm-systems/"><p class="btnn2">{{ $producto->name }}</p></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                         @empty
                         <div class="swiper-slide wow animated">
                            <div class="box-style2 box-primary-color2">
                                <img class="efozel2" src="{{ asset('secutech/small-services-secutech-33.jpg') }}" alt="">
                                <div class="bosluk333"></div>
                                <div class="descontent">
                                    <p class="services-kutu2--wts3 wow fade animated">
                                        No hay registro de productor, esta es una plantilla.</p>
                                    <div class="bosluk333"></div>
                                    <div class="orserv">
                                        <a class="btn-5" href="#alarm-systems/"><p class="btnn2">Sistema de alarma</p></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                         @endforelse
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>      
</section>
@endsection

@section('script_service')
@endsection