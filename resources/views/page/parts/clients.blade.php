@section('content_clients')
<!--Markalar Alanı-->
<section class="markalar">
    <h6>.</h6>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="h-yazi-ortalama h-yazi-margin-orta-3">
                    <h2 class="h2-baslik-hizmetler-2 wow fadeInLeft">
                        Nuestra experiencia está respaldada por nuestros principales clientes
                    </h2>
                </div>
                <p class="h2-baslik-hizmetler-2__paragraf wow fadeInLeft">
                    Pregunta por nosotros, nuestra calidad es unica.
                </p>
            </div>
        </div>
        <div class="row">    
            @forelse ($referencias as $referencia)
            <div class="col-lg-2">
                <div class="h-yazi-ortalama h-yazi-margin-kucuk-21 wow animated fadeInUp animated">
                    <img src="{{ asset('img/reference'. $referencia->img_name) }}" alt="Marka 1" class="marka">
                </div>
            </div>
            @empty
            <div class="col-lg-2">
                <div class="h-yazi-ortalama h-yazi-margin-kucuk-21 wow animated fadeInUp animated">
                    <img src="{{ asset('secutech/cameraa-4.jpg') }}" alt="Marka 1" class="marka">
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection