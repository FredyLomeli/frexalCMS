@section('content_branding')
@if ($nosotros['see'] === "1")
<br/>
<!--About Info Alanı-->
<section class="hakkimizda-bolumu-anasayfa">
    <div class="h-yazi-ozel h-yazi-margin-ozel"></div>
    <div class="tablo">
        <!--Galeri Görsel Alanı-->
        <div class="tablo--1-ve-3 wow fadeInUp">
            <h2 class="h2-baslik-anasayfa-ozel btw wow fadeInRight"> Nosotros </h2>
            <div class="bosluk333"></div>
            <p class="paragraf wow fadeInRight"></p>
            <p><strong>¿Quienes somos?</strong></p>
            <p>&nbsp;</p>
            <p>{{ $nosotros['name'] }}</p>
        </div>
         <div class="tablo--1-ve-2">
            <img class="galeri__gorsel--3ab shimmer zimage wow fadeInUp" src="{{ asset('/img/about' . $nosotros['img']) }}">
        </div>         
    </div>
</section>
<div class="bosluk4"></div>
<br/>
@endif

@if ($mision['see'] === "1")
<br/>
<!--About Info Alanı-->
<section class="hakkimizda-bolumu-anasayfa">
    <div class="h-yazi-ozel h-yazi-margin-ozel"></div>
    <div class="tablo">
        <div class="tablo--1-ve-2">
            <img class="galeri__gorsel--3ab shimmer zimage wow fadeInUp" src="{{ asset('/img/about' . $mision['img']) }}">
        </div> 
        <!--Galeri Görsel Alanı-->
        <div class="tablo--1-ve-3 wow fadeInUp">
            <h2 class="h2-baslik-anasayfa-ozel btw wow fadeInRight"> Misión </h2>
            <div class="bosluk333"></div>
            <p class="paragraf wow fadeInRight"></p>
            <p>&nbsp;</p>
            <p>{{ $mision['name'] }}</p>
        </div>
    </div>
</section>
<div class="bosluk4"></div>
<br/>
@endif

@if ($vision['see'] === "1")
<br/>
<!--About Info Alanı-->
<section class="hakkimizda-bolumu-anasayfa">
    <div class="h-yazi-ozel h-yazi-margin-ozel"></div>
    <div class="tablo">
        <!--Galeri Görsel Alanı-->
        <div class="tablo--1-ve-3 wow fadeInUp">
            <h2 class="h2-baslik-anasayfa-ozel btw wow fadeInRight"> Visión </h2>
            <div class="bosluk333"></div>
            <p class="paragraf wow fadeInRight"></p>
            <p>&nbsp;</p>
            <p>{{ $vision['name'] }}</p>
        </div>
        <div class="tablo--1-ve-2">
            <img class="galeri__gorsel--3ab shimmer zimage wow fadeInUp" src="{{ asset('/img/about' . $vision['img']) }}">
        </div> 
    </div>
</section>
<div class="bosluk4"></div>
<br/>
@endif
@endsection