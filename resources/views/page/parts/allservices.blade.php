@section('content_allservices')
<!--About Info Alanı-->
<section class="hizmetlerr-bolumu">
    <div class="h-yazi-ozel h-yazi-margin-ozel"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="sidebar-service wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">          
                    <li id="nav_menu-2" class="widget widget_nav_menu">
                        <h2 class="widgettitle">Servicios</h2>
                        <div class="menu-all-services-container">
                            <ul id="menu-all-services" class="menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                                <!-- Listado de categorias que muestran sus servicios -->
                                @forelse ( $categorys as $category )
                                    <li id="menu-item-{{ $category->id }}" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-{{ $category->id }}"><a href="{{ route('show_categorys', $category->slug) }}">{{ $category->name }}</a></li>
                                @empty
                                    <li id="menu-item-8397" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2056 current_page_item menu-item-8397"><a href="https://garantiwebdesign.com/wordpress/secutech/home-security/" aria-current="page">Home Security</a></li>
                                    <li id="menu-item-8396" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8396"><a href="https://garantiwebdesign.com/wordpress/secutech/camera-systems/">Camera Systems</a></li>
                                    <li id="menu-item-8395" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8395"><a href="https://garantiwebdesign.com/wordpress/secutech/alarm-systems/">Alarm Systems</a></li>
                                    <li id="menu-item-8394" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8394"><a href="https://garantiwebdesign.com/wordpress/secutech/barrier-systems/">Barrier Systems</a></li>
                                    <li id="menu-item-8717" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8717"><a href="https://garantiwebdesign.com/wordpress/secutech/home-security/#">Fire Systems</a></li>
                                    <li id="menu-item-8718" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8718"><a href="https://garantiwebdesign.com/wordpress/secutech/home-security/#">Fingerprint Reading</a></li>
                                    <li id="menu-item-8719" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8719"><a href="https://garantiwebdesign.com/wordpress/secutech/home-security/#">Turnstile Systems</a></li>
                                    <li id="menu-item-8720" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8720"><a href="https://garantiwebdesign.com/wordpress/secutech/home-security/#">Camera Record</a></li>
                                @endforelse
                            </ul>
                        </div>
                    </li>
                    @include('page.parts.simplecontact')
                </div> 
                <div class="bosluk3"></div>
            </div>
            <!-- Si no hay categorias cargadas se muestra la plantilla -->
            @if(empty($categorys)) 
            <div class="col-lg-8">
                <div class="bosluk44"></div>
                <div class="galeri wow fadeInRight" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInRight;">
                    <img src="{{ asset('img/services/service-secutech-big-1.jpg') }}" alt="IT Support Services" class="galeri__gorsel galeri__gorsel--3">
                </div>
                <div class="bosluk3"></div>
                <h2 class="h2-baslik-anasayfa-ozel wow fade animated" style="visibility: visible;">Home Security</h2>
                <div class="bosluk333"></div>
                <p class="paragraf wow fade animated" style="visibility: visible;"></p>
                <p>It may occur at home and at work; We provide your home security by using the latest technological innovations against all internal and external security needs including theft, fire, gas leak, flood, emergency health and panic situations.</p>
                <p></p>
                <div class="bosluk333"></div>
                <img class="divider" width="120" height="15" title="divider" alt="divider" src="{{ asset('img/services/divider.jpg') }}">
                <div class="bosluk333"></div>
                <p class="paragraf wow fade animated" style="visibility: visible;"></p>
                <p>Thanks to our Electronic Security Solutions, Alarm Systems and Alarm Monitoring Center, we provide full protection in the field of security.</p>
                <p></p>
                <div class="bosluksv"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="dep2 infoe" data-tilt="">
                                <div class="or">
                                    <div class="icon"><i class="flaticon-cctv-camera"></i></div>
                                    <div class="bosluk333"></div>
                                    <h3 class="businesss"><a href="https://garantiwebdesign.com/wordpress/secutech/home-security/">Reliability</a></h3>
                                    We provide accurate, reliable and ethical services with our expert staff. We apply the fastest and most reliable methods for your brand.<div class="bosluk333"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dep2 infoe" data-tilt="">
                                <div class="or">
                                    <div class="icon"><i class="flaticon-fire-alarm"></i></div>
                                    <div class="bosluk333"></div>
                                    <h3 class="businesss"><a href="https://garantiwebdesign.com/wordpress/secutech/home-security/">Loyalty</a></h3>
                                    Our long-term work continues until the job is finished. We establish solid and long-term relationships with all the companies we work with.<div class="bosluk333"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dep2 infoe" data-tilt="">
                                <div class="or">
                                    <div class="icon"><i class="flaticon-temperature"></i></div>
                                    <div class="bosluk333"></div>
                                    <h3 class="businesss"><a href="https://garantiwebdesign.com/wordpress/secutech/home-security/">Professional</a></h3>
                                    We provide accurate, reliable and ethical services with our expert staff. We apply the fastest and most reliable methods for your brand.<div class="bosluk333"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dep2 infoe" data-tilt="">
                                <div class="or">
                                    <div class="icon"><i class="flaticon-eye-scan"></i></div>
                                    <div class="bosluk333"></div>
                                    <h3 class="businesss"><a href="https://garantiwebdesign.com/wordpress/secutech/home-security/">Support</a></h3>
                                    Our long-term work continues until the job is finished. We establish solid and long-term relationships with all the companies we work with.                            <div class="bosluk333"></div>
                                </div>
                            </div>
                        </div>
                   
                    </div>
                 
                </div>
            </div>
            @else
            <!-- Si hay categorias cargadas se muestra la seleccionada -->
            <div class="col-lg-8">
                <div class="bosluk44"></div>
                @empty($sCategory->img_name)
                <div class="galeri wow fadeInRight" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInRight;">
                    <img src="{{ asset('img/services/service-secutech-big-1.jpg') }}" alt="IT Support Services" class="galeri__gorsel galeri__gorsel--3">
                </div>
                @else
                <div class="galeri wow fadeInRight" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInRight;">
                    <img src="{{ asset('img/services'.$sCategory->img_name) }}" alt="IT Support Services" class="galeri__gorsel galeri__gorsel--3">
                </div>
                @endempty

                <div class="bosluk3"></div>
                <h2 class="h2-baslik-anasayfa-ozel wow fade animated" style="visibility: visible;">{{ $sCategory->name }}</h2>
                <div class="bosluk333"></div>
                <p class="paragraf wow fade animated" style="visibility: visible;"></p>
                <p>{{ $sCategory->description }}</p>
                <p></p>
                <div class="bosluk333"></div>
                <img class="divider" width="120" height="15" title="divider" alt="divider" src="{{ asset('img/services/divider.jpg') }}">
                <div class="bosluk333"></div>
                <p class="paragraf wow fade animated" style="visibility: visible;"></p>
                <p>{{ $sCategory->description2 }}</p>
                <p></p>
                <div class="bosluksv"></div>
                <div class="container">
                    <div class="row">
                        <!-- Si no hay servicios en la categoria seleccionada se muestra la plantilla -->
                        @forelse ( $sCategory->products as $producto )
                        <div class="col-lg-6">
                            <div class="dep2 infoe" data-tilt="">
                                <div class="or">
                                    <div class="icon"><i class="fx-{{ $producto->icon }}"></i></div>
                                    <div class="bosluk333"></div>
                                    <h3 class="businesss"><a href="{{ route('services_category', $producto->slug) }}">{{ $producto->name }}</a></h3>
                                    {{ $producto->descripcion_corta }}
                                    <div class="bosluk333"></div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-lg-6">
                            <div class="dep2 infoe" data-tilt="">
                                <div class="or">
                                    <div class="icon"><i class="fx-laptop-msg"></i></div>
                                    <div class="bosluk333"></div>
                                    <h3 class="businesss"><a href="#">Plantilla</a></h3>
                                    Si no se encuentra registrado ningun servicio o producto en esta categoria se muestra este recuadro.
                                    <div class="bosluk333">Saludos!</div>
                                </div>
                            </div>
                        </div>
                        @endforelse
                    <!-- https://garantiwebdesign.com/wordpress/secutech/home-security/ -->
                    </div>
                 
                </div>
            </div>

            @endif
            

        </div>
    </div>
</section>
@endsection