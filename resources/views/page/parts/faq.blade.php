@section('styles_faq')
<link rel="stylesheet" href="{{ asset('secutech/swiper.min.css') }}" media="all">
@endsection

@section('content_faq')
<!--FAQ-->
<section class="fq2">
    <div class="h-yazi-ozel h-yazi-margin-ozel"></div>
    <div class="tablo">
        <div class="tablo--1-ve-2">
            <div class="galeri wow fadeInLeft">
                <img src="{{ asset('img/faq/faq-about-suctech-2.png') }}" alt="About" class="galeri__gorsel galeri__gorsel--395 zimage">
            </div>
        </div>         
        <!--Galeri Görsel Alanı-->
        <div class="tablo--1-ve-3 wow fadeInUp">
            <p class="paragraf wow fadeInRight"></p>
            <h2 class="wow fadeInLeft" style="color: rgb(255, 255, 255); font-size: 30px; font-weight: 900; visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;" data-wow-delay="0.4s">¿Necesitas ayuda?</h2>
            <p class="wow fadeInLeft" style="color: rgb(255, 255, 255); visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;" data-wow-delay="0.5s">Consulta las preguntas frecuentes.</p>
            <div class="bosluk333"></div>
            <div class="wrapper"> 
                @forelse ($faqs as $faq)
                <div class="container asa">
                    <div class="question">{{ $faq->question }}</div>
                    <div class="answercont">
                        <div class="answer">{{ $faq->answer }}</div>
                    </div>
                </div>
                @empty
                 <div class="container asa">
                    <div class="question">¿No hay registros de preguntas?</div>
                    <div class="answercont">
                        <div class="answer">Esta pregunta se muestra siempre que no se tiene por lo menos un registro de pregunta registrado.</div>
                    </div>
                </div>
                @endforelse
            </div>
        <div class="bosluk333"></div>
        </div>
    </div>
</section>
@endsection

@section('script_faq')
<script src="{{ asset('secutech/swiper.min.js') }}" id="swiper-js"></script>
@endsection
