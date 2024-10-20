@section('content_about')
<!--About Info Alanı-->
<section class="hakkimizda-bolumu-anasayfa">
    <div class="h-yazi-ozel h-yazi-margin-ozel"></div>
    <div class="tablo">
        <div class="tablo--1-ve-2">
            @if(isset($welcome['img']))
                <img class="galeri__gorsel--3ab shimmer zimage wow fadeInUp" src="{{ asset('/img/about' . $welcome['img']) }}">
            @else 
                <img class="galeri__gorsel--3ab shimmer zimage wow fadeInUp" src="{{ asset('/secutech/secutech-about-1.jpg') }}">
            @endif
        </div>         
        <!--Galeri Görsel Alanı-->
        <div class="tablo--1-ve-3 wow fadeInUp">
            <h2 class="h2-baslik-anasayfa-ozel btw wow fadeInRight"> {{ $welcome['title'] }} </h2>
            <div class="bosluk333"></div>
            <p class="paragraf wow fadeInRight"></p>
            <p><strong>{{ $welcome['title2'] }}</strong></p>
            <p>&nbsp;</p>
            <p>{{ $welcome['description'] }}</p>
            <div class="bosluk3"></div>
            <div class="container">
                <div class="row">
                    <div class="dephh">
                        <div class="container">
                            <div class="row">
                                @isset($welcome['message1'] )
                                <div class="col-lg-12 lefthealtfooter">
                                    <div class="row yk" onclick="location.href=&#39;#&#39;;" style="cursor:pointer;">
                                        <div class="col-lg-3">
                                            <div class="iconhh"><i class="fx-{{ $welcome['icon1'] }}"></i></div>
                                        </div>
                                        <div class="col-lg-9">
                                            <h4 class="services-kutu2--wt13 wow fade">{{ $welcome['message1'] }}</h4>
                                            <h2 class="h2-baslik-anasayfa-wth2e wow fade">{{ $welcome['description1'] }}</h2>
                                        </div>
                                    </div>
                                </div>
                                @endisset
                                @isset($welcome['message2'])
                                <div class="col-lg-12 lefthealtfooter">
                                    <div class="row yk" onclick="location.href=&#39;#&#39;;" style="cursor:pointer;">
                                        <div class="col-lg-3">
                                            <div class="iconhh"><i class="fx-{{ $welcome['icon2'] }}"></i></div>
                                        </div>
                                        <div class="col-lg-9">
                                            <h4 class="services-kutu2--wt13 wow fade">{{ $welcome['message2'] }}</h4>
                                            <h2 class="h2-baslik-anasayfa-wth2e wow fade">{{ $welcome['description2'] }}</h2>
                                        </div>
                                    </div>
                                </div>
                                @endisset
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bosluk12b"></div>
            <a href="{{ $welcome['link'] }}" class="btn-2 wow fadeInUp"><p class="btnn2">{{ $welcome['boton'] }}</p></a>
            <div class="bosluk3rh"></div>
        </div>
    </div>
</section>
<div class="bosluk4"></div>
@endsection