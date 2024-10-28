@section('content_category')
<!-- What Do We Offer? -->
<section class="why-us">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="h-yazi-ortalama h-yazi-margin-orta-3">
                    <h2 class="h2-baslik-hizmetler-21 wow fadeInLeft">¿Por qué elegirnos?</h2>
                </div>
                <p class="h2-baslik-hizmetler-21__paragraf wow fadeInLeft">Consulte todos los servicios que ofrecemos.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @forelse ($categorys->sortByDesc('id') as $category)
            <div class="col-lg-3 ds wow zoomIn">
                <div class="dep">
                    <div class="or56">
                        <div class="iconwr or56"><p class="dzv"><i class="fx-{{ $category->icon }}"></i></p></div>
                        <div class="bosluk333"></div>
                        <h3 class="prongl2">{{ $category->name }}</h3>
                        <h4 class="infostext">{{ $category->description }}</h4>
                        <a class="btn-3" href="{{ route('services') }}"><p class="btnn2">Ver más</p></a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-lg-3 ds wow zoomIn">
                <div class="dep">
                    <div class="or56">
                        <div class="iconwr or56"><p class="dzv"><i class="fx-alarma-cel"></i></p></div>
                        <div class="bosluk333"></div>
                        <h3 class="prongl2">Sin Categorias</h3>
                        <h4 class="infostext">Este registro se muestra al no tener categorias capturadas.</h4>
                        <a class="btn-3" href="#"><p class="btnn2">Ver más</p></a>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection