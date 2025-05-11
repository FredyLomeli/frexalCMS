@section('content_team')
<!--TITLE-->
<section class="ozellika" data-background="#f9f9f9" style="background: rgb(249, 249, 249);">
    <div class="container">
        <div class="row align-items-center no-gutters">
            <div class="col-lg-12">
                <div class="wow fadeInUp">
                    <div class="boslukalt"></div>
                    <h2 class="h2-baslik-hizmetler-2 wow fadeInLeft"> Conozca a nuestro equipo </h2>
                    <p class="h2-baslik-hizmetler-2__paragraf wow fadeInUp">Estamos a su servicio con el mejor equipo.</p>   
                </div>
            </div>
        </div>
    </div>
</section>    
<!--Team Alanı-->
<section class="team-section">
    <div class="container">
        <div class="row">
            @forelse ( $ourTeams as $ourTeam )

            <div class="col-xl-3">
                <div class="class-box">
                    <div class="services-kutu2 wow fadeInLeft">
                        <div class="member-box wow reveal-effect">
                            <figure class=""> <img src="{{ asset('img/team/'.$ourTeam->foto) }}" alt="Image">
                                <figcaption>
                                    <h6>{{ $ourTeam->name }}</h6>
                                    <p class="paragraf-sol-beyaz-orta">{{ $ourTeam->puesto}}</p>
                                    <ul>
                                        @isset($ourTeam->facebook)
                                            <li><a href="{{$ourTeam->facebook}}" class="fx-facebook-1" aria-hidden="true"></a></li>
                                        @endisset
                                        @isset($ourTeam->instagram)
                                            <li><a href="{{$ourTeam->instagram}}" class="fx-instagrem" aria-hidden="true"></a></li>
                                        @endisset
                                        @isset($ourTeam->twitter)
                                            <li><a href="{{$ourTeam->twitter}}" class="fx-x-twitter-solid" aria-hidden="true"></a></li>
                                        @endisset
                                        @isset($ourTeam->linkedin)
                                            <li><a href="{{$ourTeam->linkedin}}" class="fx-linkedin-1" aria-hidden="true"></a></li>
                                        @endisset
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div> 

            @empty

            <div class="col-xl-3">
                <div class="class-box">
                    <div class="services-kutu2 wow fadeInLeft">
                        <div class="member-box wow reveal-effect">
                            <figure class=""> <img src="{{ asset('img/team/team-indus-1.jpg') }}" alt="Image">
                                <figcaption>
                                    <h6>Ejemplo equipo</h6>
                                    <p class="paragraf-sol-beyaz-orta">Fundador</p>
                                    <ul>
                                        <li><a href="#" class="fx-facebook-1" aria-hidden="true"></a></li>
                                        <li><a href="#" class="fx-instagrem" aria-hidden="true"></a></li>
                                        <li><a href="#" class="fx-x-twitter-solid" aria-hidden="true"></a></li>
                                        <li><a href="#" class="fx-linkedin-1" aria-hidden="true"></a></li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>   
            @endforelse
 
        </div>
    </div>
</section>
@endsection