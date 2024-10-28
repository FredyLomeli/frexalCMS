<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="max-image-preview:large">
    <!-- Importante 1 layout adcionales -->
    <!-- Importante 2 layout adcionales -->
    <link rel="stylesheet" href="{{ asset('secutech/style.min.css') }}" media="all">
    <!-- Importante 3 layout adcionales -->
    <link rel="stylesheet" href="{{ asset('secutech/styles.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('secutech/close-button-icon.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('secutech/style.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('secutech/fancybox.min.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('secutech/bootstrap.min.css') }}" media="all">
    <!-- Rest Stylesheet -->
    @yield('styles')
    <link rel="stylesheet" href="{{ asset('secutech/odometer.min.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('secutech/custom.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('secutech/app.css') }}" media="all">
    <!-- Frexal Icon -->
    <link rel="stylesheet" href="{{ asset('lib/frexalicon/styles.css') }}" media="all">
    
    <title>@yield('title'){{$informacion['page'] . ' - '. $informacion['nombre']}}</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/secutech-favicion.png') }}">

    <meta name="description" content="Home, Office, Workplace, Store, Warehouse, Site, Shop camera and security systems.">
    <script src="{{ asset('secutech/wp-emoji-release.min.js') }}" defer=""></script>
</head>

<body class="page-loaded">
    <div class="page-transition"></div>
    <aside class="side-widget">
        <div class="inner">
            <!-- Logo Menu Mobile -->
            <div class="logo"> 
                <a href={{route('index')}}><img src="{{ asset('img/'.$informacion['img_logo']) }}"  alt="Image" style="max-width: 40%;"></a>
            </div>
            <div class="hide-mobile">
                <div class="or">
                    <h2 class="h2-baslik-hizmetler-2"> Información de contacto </h2>
                </div>
                <div class="icon"><i class="fx-telephone"></i></div>
                    <address class="address">
                        {{$informacion['telefono_oficina']}}
                        <div class="icon"><i class="fx-mail"></i></div>
                        {{$informacion['email']}}
                        <div class="icon"><i class="fx-map-punto"></i></div>
                        @isset($informacion['direccion'])
                            {{ $informacion['direccion'] . ' ' }}
                        @endisset @isset($informacion['municipio'])
                            {{ $informacion['municipio']  . ' ' }}
                        @endisset @isset($informacion['estado'])
                            {{ $informacion['estado']  . ' ' }}
                        @endisset
                        <div class="bosluksv"></div>
                            <div class="or">
                            @isset( $informacion['facebook'] )
                                <a class="social-marg" href="{{ $informacion['facebook'] }}" target="_blank"><i class="fx-facebook iconsocia"></i></a>
                            @endisset
                            @isset( $informacion['instagram'] )
                                <a class="social-marg" href="{{ $informacion['instagram'] }}" target="_blank"><i class="fx-instagram-line iconsocia"></i></a>
                            @endisset
                            @isset( $informacion['twitter'] )
                                <a class="social-marg" href="{{ $informacion['twitter'] }}" target="_blank"><i class="fx-twitter-x iconsocia"></i></a>
                            @endisset
                            @isset( $informacion['no_whatsapp'] )
                                <a class="social-marg" target="_blank" href="https://wa.me/{{ $informacion['no_whatsapp'] }}?text=Estoy%20interesado%20en%20proteger%20mi%20empresa/negocio/hogar."><i class="fx-whatsapp iconsocia"></i></a>
                            @endisset
                            </div>
                    </address>
                </div>
                <div class="show-mobile">
                    <div class="site-menu">
                        <div class="menu">

                            <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                                <ul id="menu-mobile-menu" class="nav navbar-nav">
                                    <li class="menu-item" style="opacity: 1;">
                                        <a href="{{route('index')}}" class="nav-link">
                                            <span >Inicio</span>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="opacity: 1;">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link">
                                            <span>Nosotros</span>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown">
                                            <li  class="menu-item" style="opacity: 1;">
                                                <a href="{{route('nosotros')}}" class="dropdown-item">
                                                    <span>¿Quiénes somos?</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" style="opacity: 1;">
                                                <a href="{{route('team')}}" class="dropdown-item">
                                                    <span>Nuestro equipo</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" style="opacity: 1;">
                                                <a href="{{route('faq')}}" class="dropdown-item">
                                                    <span>Preguntas Frecuentes</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item" style="opacity: 1;">
                                        <a href="#" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link">
                                            <span>Servicios</span>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown">
                                            <li class="menu-item" style="opacity: 1;">
                                                <a href="{{route('services')}}" class="dropdown-item">
                                                    <span >Hogar seguro</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" style="opacity: 1;">
                                                <a href="#camera-systems/" class="dropdown-item">
                                                    <span>CTCV</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" style="opacity: 1;">
                                                <a href="#alarm-systems/" class="dropdown-item">
                                                    <span>Sistemas de alarma</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" style="opacity: 1;">
                                                <a href="#barrier-systems/" class="dropdown-item">
                                                    <span>Control de acceso</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" style="opacity: 1;">
                                                <a href="#all-services/" class="dropdown-item">
                                                    <span>Nuestro servicios</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item" style="opacity: 1;">
                                        <a href="{{route('clients_ref')}}" class="nav-link">
                                            <span >Referencias</span>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="opacity: 1;">
                                        <a href="{{route('show_news')}}" class="nav-link">
                                            <span >Blog</span>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="opacity: 1;">
                                        <a href="{{route('contacto')}}" class="nav-link">
                                            <span >Contactanos</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>   

                        </div>
                    </div>
                </div>
                <small style="text-align:center;">© 2024 {{ $informacion['nombre_corto'] }} - Todos los derechos reservados.</small> 
            </div>
        </div>
    </aside>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <!-- Logo Menu Desktop -->
            <div class="logo"><a href="{{route('index')}}"><img src="{{ asset('img/'.$informacion['img_logo']) }}" alt="Image"></a></div>
                <div class="site-menu">
                    <div class="menueffect">
                        <div id="bs-example-navbar-collapse-2" class="collapse navbar-collapse">
                            <ul id="menu-main-menu" class="nav navbar-nav">
                                <li class="menu-item" style="opacity: 1;">
                                    <a href="{{route('index')}}" class="nav-link">
                                        <span>Inicio</span>
                                    </a>
                                </li>
                                <li class="menu-item" style="opacity: 1;">
                                    <a href="#" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link">
                                        <span >Nosotros</span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown">
                                        <li class="menu-item" style="opacity: 1;">
                                            <a href="{{route('nosotros')}}" class="dropdown-item">
                                                <span>¿Quiénes somos?</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="opacity: 1;">
                                            <a href="{{route('team')}}" class="dropdown-item">
                                                <span>Nuestro equipo</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="opacity: 1;">
                                            <a href="{{route('faq')}}" class="dropdown-item">
                                                <span>Preguntas Frecuentes</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item" style="opacity: 1;">
                                    <a href="#" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link">
                                        <span>Servicios</span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown">
                                        <li class="menu-item" style="opacity: 1;">
                                            <a href="{{route('services')}}" class="dropdown-item">
                                                <span>Hogar seguro</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="opacity: 1;">
                                            <a href="#" class="dropdown-item">
                                                <span>CCTV</span>
                                            </a>
                                        </li>
                                        <li  class="menu-item" style="opacity: 1;">
                                            <a href="#" class="dropdown-item">
                                                <span>Sistema de alarma</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="opacity: 1;">
                                            <a href="#" class="dropdown-item">
                                                <span>Control de acceso</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="opacity: 1;">
                                            <a href="#" class="dropdown-item">
                                                <span>Nuestro servicios</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item" style="opacity: 1;">
                                    <a href="{{route('clients_ref')}}" class="nav-link">
                                        <span >Referencias</span>
                                    </a>
                                </li>
                                <li class="menu-item" style="opacity: 1;">
                                    <a href="{{route('show_news')}}" class="nav-link">
                                        <span >Blog</span>
                                    </a>
                                </li>
                                <li class="menu-item" style="opacity: 1;">
                                    <a href="{{route('contacto')}}" class="nav-link">
                                        <span >Contactanos</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hamburger-menu"> <span></span> <span></span> <span></span> </div>
                <div class="navbar-button"> 
                    <div class="btn-1" onclick="location.href='{{route('contacto')}}';" style="cursor:pointer;">
                        <i class="fx-camara-domo iconp"></i><p class="asdas">Contactanos →</p>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Header End -->

    @yield('content')
    
    <!-- Footer Start -->
    <footer class="footer">
        <section class="footr">
            <div class="container">
                <div class="row">
                    <div class="depff">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 lefthealtfooter">
                                    <div class="row yk" onclick="location.href=&#39;#&#39;;" style="cursor:pointer;">
                                        <div class="col-lg-3">
                                            <div class="iconheal"><i class="fx-24-horas"></i></div>
                                        </div>
                                        <div class="col-lg-9">
                                            <h4 class="services-kutu2--wt13 wow fade" >Contactanos</h4>
                                            <h2 class="h2-baslik-anasayfa-wthe wow fade" >{{ $informacion['telefono'] }}</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 lefthealtfooter">
                                    <div class="row yk" onclick="location.href=&#39;#&#39;;" style="cursor:pointer;">
                                        <div class="col-lg-3">
                                            <div class="iconheal"><i class="fx-mail"></i></div>
                                        </div>
                                        <div class="col-lg-9">
                                            <h4 class="services-kutu2--wt13 wow fade" >Información y reportes</h4>
                                            <h2 class="h2-baslik-anasayfa-wthe wow fade" >{{ $informacion['email'] }}</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 lefthealtfooter">
                                    <div class="row yk" onclick="location.href=&#39;#&#39;;" style="cursor:pointer;">
                                        <div class="col-lg-3">
                                            <div class="iconheal"><i class="fx-map-punto"></i></div>
                                        </div>
                                        <div class="col-lg-9">
                                            <h4 class="services-kutu2--wt13 wow fade" >Visítanos @isset($informacion['horario'])
                                                de {{ $informacion['horario'] }}
                                            @endisset</h4>
                                            <h2 class="h2-baslik-anasayfa-wthe wow fade" >@isset($informacion['direccion'])
                                                {{ $informacion['direccion'] . ' ' }}
                                            @endisset @isset($informacion['municipio'])
                                                {{ $informacion['municipio']  . ' ' }}
                                            @endisset @isset($informacion['estado'])
                                                {{ $informacion['estado']  . ' ' }}
                                            @endisset</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <!-- end col-3 -->
                <div class="col-xl-2 cce col-lg-4 cce">
                    <div class="logo wow animated fadeInUp animated" data-wow-delay="0s" style="text-align:center;"> 
                        <img src="{{ asset('img/'.$informacion['img_logo']) }}" alt="Image"> 
                    </div>
                    <!-- end logo -->
                    <p style="color:#fff;text-align:center;">{{ $informacion['informacion_footer1'] }}</p>
                    <div class="bosluk333"></div>
                    <ul class="footer-social cce wow animated fadeInUp animated" data-wow-delay="0.5s" >
                    @isset( $informacion['facebook'] )
                        <li><a href="{{ $informacion['facebook'] }}" target="_blank"><i class="fx-facebook iconsociaf"></i></a></li>
                    @endisset
                    @isset( $informacion['instagram'] )
                        <li><a href="{{ $informacion['instagram'] }}" target="_blank"><i class="fx-instagram-line iconsociaf"></i></a></li>
                    @endisset
                    @isset( $informacion['twitter'] )
                        <li><a href="{{ $informacion['twitter'] }}" target="_blank"><i class="fx-twitter-x iconsociaf"></i></a></li>
                    @endisset
                    @isset( $informacion['no_whatsapp'] )
                        <li><a href="https://wa.me/{{ $informacion['no_whatsapp'] }}?text=Estoy%20interesado%20en%20proteger%20mi%20empresa/negocio/hogar." target="_blank"><i class="fx-whatsapp iconsociaf"></i></a></li>
                    @endisset
                    </ul>
                </div>
                <!-- end col-2 -->
                <div class="col-lg-3 cce1 wow animated fadeInUp animated" data-wow-delay="0.5s" >
                    <h6 class="widget-title">Servicios</h6>
                    <div class="footer-menu cce">
                        <div class="menu-services-container">
                            <ul id="menu-services" class="menu">
                            @forelse ($categorys->take(4) as $category)
                                <li class="menu-item"><a href="{{route('services')}}">{{ $category->name }}</a></li>
                            @empty
                                <li class="menu-item"><a href="{{route('services')}}">Sin registro</a></li>
                                <li class="menu-item"><a href="{{route('services')}}">Sin registro</a></li>
                                <li class="menu-item"><a href="{{route('services')}}">Sin registro</a></li>
                                <li class="menu-item"><a href="{{route('services')}}">Sin registro</a></li>
                            @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end col-2 -->
                <div class="col-lg-3 cce wow animated fadeInUp animated" data-wow-delay="0.5s" >
                    <h6 class="widget-title">Accesos</h6>
                    <div class="footer-menu cce">
                        <div class="menu-quick-links-container">
                            <ul id="menu-quick-links" class="menu">

                                <li class="menu-item"><a href="{{route('contacto')}}">Cotizar</a></li>
                                <li class="menu-item"><a href="{{route('services')}}">Servicios</a></li>
                                <li class="menu-item"><a href="{{route('clients_ref')}}">Referencias</a></li>
                                <li class="menu-item"><a href="{{route('contacto')}}">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 cce1 wow animated fadeInUp animated" data-wow-delay="0.5s" >
                    <h6 class="widget-title">Somos expertos</h6>
                    <p style="text-align: center;">
                        <span style="color: #ffffff;">{{ $informacion['informacion_footer2'] }}</span>
                    </p>
                    <div class="or">
                        <a class="btn-3" href="{{route('contacto')}}"><p class="btnn2">Mas Información →</p></a>
                    </div>        
                    <!-- end row --> 
                </div>
                <!-- Copyright -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p class="copyright">© 2024 {{ $informacion['nombre_corto'] }} - Todos los derechos reservados.</p>
                        </div>
                    </div>
                </div>
                <div id="top" style="cursor: pointer;">
                    <i class="fx-chevron-up icontops"></i>
                    <div class="bosluk3"></div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('secutech/jquery.min.js') }}"></script>
    <!-- Rest Javascript -->
    @yield('script')
    <script src="{{ asset('secutech/wp-polyfill.min.js') }}" id="wp-polyfill-js"></script>
    <script src="{{ asset('secutech/fancybox.min.js') }}" id="fancybox-js"></script>
    <script src="{{ asset('secutech/odometer.min.js') }}" id="odometer-js"></script>
    <script src="{{ asset('secutech/wow.min.js') }}" id="wow-js"></script>
    <script src="{{ asset('secutech/scripts.js') }}" id="scripts-js"></script>
    <script src="{{ asset('secutech/3d.jquery.js') }}" id="3d-js"></script>
    <script src="{{ asset('secutech/magnific.js') }}" id="magnific-js"></script>
    <script src="{{ asset('secutech/mag.js') }}" id="mag-js"></script>
    <script src="{{ asset('secutech/pointer.js') }}" id="pointer-js"></script>
    <script src="{{ asset('secutech/yukari-cik.js') }}" id="yukari-cik-js"></script>
    <script src="{{ asset('secutech/custom.js') }}" id="custom-js"></script>
    <!--Cursor Script-->                    
    <script> init_pointer({ })</script>

</body>
</html>
