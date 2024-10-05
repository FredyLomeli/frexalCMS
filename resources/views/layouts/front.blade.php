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
    <link rel="stylesheet" id="contact-form-7-css" href="{{ asset('lib/frexalicon/styles.css') }}" media="all">


    
    <title>Home - ISSI Ingeniería en Sistemas de Seguridad Inteligente</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/secutech-favicion.png') }}">
    <!-- Frexal Icon -->

    <meta name="description" content="Home, Office, Workplace, Store, Warehouse, Site, Shop camera and security systems.">
    <script src="{{ asset('secutech/wp-emoji-release.min.js') }}" defer=""></script>
</head>

<body class="page-loaded">
    <div class="page-transition"></div>
    <aside class="side-widget">
        <div class="inner">
            <!-- Logo Menu Mobile -->
            <div class="logo"> 
                <a href={{route('index')}}><img src="{{ asset('secutech/logo.png') }}"  alt="Image" style="max-width: 40%;"></a>
            </div>
            <div class="hide-mobile">
                <div class="or">
                    <h2 class="h2-baslik-hizmetler-2"> Información de contacto </h2>
                </div>
                <div class="icon"><i class="fx-telephone"></i></div>
                    <address class="address">
                        +1 (234) 567 89 10
                        <div class="icon"><i class="fx-mail"></i></div>
                        example@example.com
                        <div class="icon"><i class="fx-map-punto"></i></div>
                        New Jersey, USA
                        <div class="bosluksv"></div>
                            <div class="or">
                                <a class="social-marg" href="#"><i class="fx-facebook iconsocia"></i></a>
                                <a class="social-marg" href="#"><i class="fx-twitter-x iconsocia"></i></a>
                                <a class="social-marg" href="#"><i class="fx-instagram-line iconsocia"></i></a>
                            </div>
                    </address>
                </div>
                <div class="show-mobile">
                    <div class="site-menu">
                        <div class="menu">

                            <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                                <ul id="menu-mobile-menu" class="nav navbar-nav" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                                    <li class="menu-item" style="opacity: 1;">
                                        <a itemprop="url" href="#" class="nav-link" aria-current="page">
                                            <span itemprop="name">Inicio</span>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="opacity: 1;">
                                        <a href="{{route('index')}}" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link">
                                            <span itemprop="name">Nosotros</span>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown">
                                            <li  class="menu-item" style="opacity: 1;">
                                                <a itemprop="url" href="{{route('about')}}" class="dropdown-item">
                                                    <span itemprop="name">¿Quiénes somos?</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" style="opacity: 1;">
                                                <a itemprop="url" href="{{route('team')}}" class="dropdown-item">
                                                    <span itemprop="name">Nuestro equipo</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" style="opacity: 1;">
                                                <a itemprop="url" href="{{route('faq')}}" class="dropdown-item">
                                                    <span itemprop="name">Preguntas y respuestas</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item" style="opacity: 1;">
                                        <a href="#" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link">
                                            <span itemprop="name">Servicios</span>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown">
                                            <li class="menu-item" style="opacity: 1;">
                                                <a itemprop="url" href="{{route('services')}}" class="dropdown-item">
                                                    <span itemprop="name">Hogar seguro</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" style="opacity: 1;">
                                                <a itemprop="url" href="#camera-systems/" class="dropdown-item">
                                                    <span itemprop="name">CTCV</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" style="opacity: 1;">
                                                <a itemprop="url" href="#alarm-systems/" class="dropdown-item">
                                                    <span itemprop="name">Sistemas de alarma</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" style="opacity: 1;">
                                                <a itemprop="url" href="#barrier-systems/" class="dropdown-item">
                                                    <span itemprop="name">Control de acceso</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" style="opacity: 1;">
                                                <a itemprop="url" href="#all-services/" class="dropdown-item">
                                                    <span itemprop="name">Nuestro servicios</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item" style="opacity: 1;">
                                        <a itemprop="url" href="{{route('clients')}}" class="nav-link">
                                            <span itemprop="name">Referencias</span>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="opacity: 1;">
                                        <a itemprop="url" href="{{route('blog')}}" class="nav-link">
                                            <span itemprop="name">Blog</span>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="opacity: 1;">
                                        <a itemprop="url" href="href="{{route('contact')}}" class="nav-link">
                                            <span itemprop="name">Contactanos</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>   

                        </div>
                    </div>
                </div>
                <small style="text-align:center;">© 2024 ISSI - Todos los derechos reservados.</small> 
            </div>
        </div>
    </aside>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <!-- Logo Menu Desktop -->
            <div class="logo"><a href="{{route('index')}}"><img src="{{ asset('secutech/logo.png') }}" alt="Image"></a></div>
                <div class="site-menu">
                    <div class="menueffect">
                        <div id="bs-example-navbar-collapse-2" class="collapse navbar-collapse">
                            <ul id="menu-main-menu" class="nav navbar-nav" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                                <li class="menu-item" style="opacity: 1;">
                                    <a itemprop="url" href="{{route('index')}}" class="nav-link" aria-current="page">
                                        <span itemprop="name">Inicio</span>
                                    </a>
                                </li>
                                <li class="menu-item" style="opacity: 1;">
                                    <a href="#" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link">
                                        <span itemprop="name">Nosotros</span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown">
                                        <li class="menu-item" style="opacity: 1;">
                                            <a itemprop="url" href="{{route('about')}}" class="dropdown-item">
                                                <span itemprop="name">¿Quiénes somos?</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="opacity: 1;">
                                            <a itemprop="url" href="{{route('team')}}" class="dropdown-item">
                                                <span itemprop="name">Nuestro equipo</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="opacity: 1;">
                                            <a itemprop="url" href="{{route('faq')}}" class="dropdown-item">
                                                <span itemprop="name">Preguntas Frecuentes</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item" style="opacity: 1;">
                                    <a href="#" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link">
                                        <span itemprop="name">Servicios</span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown">
                                        <li class="menu-item" style="opacity: 1;">
                                            <a itemprop="url" href="{{route('services')}}" class="dropdown-item">
                                                <span itemprop="name">Hogar seguro</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="opacity: 1;">
                                            <a itemprop="url" href="#camera-systems/" class="dropdown-item">
                                                <span itemprop="name">CCTV</span>
                                            </a>
                                        </li>
                                        <li  class="menu-item" style="opacity: 1;">
                                            <a itemprop="url" href="#alarm-systems/" class="dropdown-item">
                                                <span itemprop="name">Sistema de alarma</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="opacity: 1;">
                                            <a itemprop="url" href="#barrier-systems/" class="dropdown-item">
                                                <span itemprop="name">Control de acceso</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="opacity: 1;">
                                            <a itemprop="url" href="#all-services/" class="dropdown-item">
                                                <span itemprop="name">Nuestro servicios</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item" style="opacity: 1;">
                                    <a itemprop="url" href="{{route('clients')}}" class="nav-link">
                                        <span itemprop="name">Referencias</span>
                                    </a>
                                </li>
                                <li class="menu-item" style="opacity: 1;">
                                    <a itemprop="url" href="{{route('blog')}}" class="nav-link">
                                        <span itemprop="name">Blog</span>
                                    </a>
                                </li>
                                <li class="menu-item" style="opacity: 1;">
                                    <a itemprop="url" href="{{route('contact')}}" class="nav-link">
                                        <span itemprop="name">Contactanos</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hamburger-menu"> <span></span> <span></span> <span></span> </div>
                <div class="navbar-button"> 
                    <div class="btn-1" onclick="location.href=&#39;#get-a-quote/&#39;;" style="cursor:pointer;">
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
                                            <h4 class="services-kutu2--wt13 wow fade" >Customer Service</h4>
                                            <h2 class="h2-baslik-anasayfa-wthe wow fade" >+123 456 78 90 01</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 lefthealtfooter">
                                    <div class="row yk" onclick="location.href=&#39;#&#39;;" style="cursor:pointer;">
                                        <div class="col-lg-3">
                                            <div class="iconheal"><i class="fx-mail"></i></div>
                                        </div>
                                        <div class="col-lg-9">
                                            <h4 class="services-kutu2--wt13 wow fade" >Information and Complaint</h4>
                                            <h2 class="h2-baslik-anasayfa-wthe wow fade" >example@example.com</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 lefthealtfooter">
                                    <div class="row yk" onclick="location.href=&#39;#&#39;;" style="cursor:pointer;">
                                        <div class="col-lg-3">
                                            <div class="iconheal"><i class="fx-map-punto"></i></div>
                                        </div>
                                        <div class="col-lg-9">
                                            <h4 class="services-kutu2--wt13 wow fade" >Visit Us</h4>
                                            <h2 class="h2-baslik-anasayfa-wthe wow fade" >New Jersey, USA</h2>
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
                        <img src="{{ asset('secutech/logo.png') }}" alt="Image"> 
                    </div>
                    <!-- end logo -->
                    <p style="color:#fff;text-align:center;">We unite with our expert staff and help make your world safer.</p>
                    <div class="bosluk333"></div>
                    <ul class="footer-social cce wow animated fadeInUp animated" data-wow-delay="0.5s" >
                        <li><a href="#"><i class="fx-facebook iconsociaf"></i></a></li>
                        <li><a href="#"><i class="fx-instagram-line iconsociaf"></i></a></li>
                        <li><a href="#"><i class="fx-twitter-x iconsociaf"></i></a></li>
                    </ul>
                </div>
                <!-- end col-2 -->
                <div class="col-lg-3 cce1 wow animated fadeInUp animated" data-wow-delay="0.5s" >
                    <h6 class="widget-title">Services</h6>
                    <div class="footer-menu cce">
                        <div class="menu-services-container">
                            <ul id="menu-services" class="menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                                <li id="menu-item-2082" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2082">
                                    <a href="#home-security/">Home Security</a>
                                </li>
                                <li id="menu-item-2081" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2081">
                                    <a href="#camera-systems/">Camera Systems</a>
                                </li>
                                <li id="menu-item-2080" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2080">
                                    <a href="#alarm-systems/">Alarm Systems</a>
                                </li>
                                <li id="menu-item-2079" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2079">
                                    <a href="#barrier-systems/">Barrier Systems</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end col-2 -->
                <div class="col-lg-3 cce wow animated fadeInUp animated" data-wow-delay="0.5s" >
                    <h6 class="widget-title">Quick Links</h6>
                    <div class="footer-menu cce">
                        <div class="menu-quick-links-container">
                            <ul id="menu-quick-links" class="menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                                <li id="menu-item-7756" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7756">
                                    <a href="#get-a-quote/">Get A Quote</a>
                                </li>
                                <li id="menu-item-2745" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2745">
                                    <a href="#all-services/">Services</a>
                                </li>
                                <li id="menu-item-8401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8401">
                                    <a href="#references/">References</a>
                                </li>
                                <li id="menu-item-1734" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1734">
                                    <a href="#contact/">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 cce1 wow animated fadeInUp animated" data-wow-delay="0.5s" >
                    <h6 class="widget-title">Superior Experience</h6>
                    <p style="text-align: center;">
                        <span style="color: #ffffff;">Our story began a quarter of a century ago; Today, we are the world leader in the industry, with hundreds of thousands of security guards across continents.</span>
                    </p>
                    <div class="or">
                        <a class="btn-3" href="#%3E"><p class="btnn2">More Information →</p></a>
                    </div>        
                    <!-- end row --> 
                </div>
                <!-- Copyright -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p class="copyright">© 2024 Secutech - All Rights Reserved.</p>
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
