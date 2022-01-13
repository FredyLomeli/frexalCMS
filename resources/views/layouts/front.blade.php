<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>@yield('title'){{$informacion['nombre']}}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap Agency Template" name="keywords">
        <!-- Descripción -->
        <meta name="description" content="Descripcion de pagina. No superar los 155 caracteres." />
        <!-- Twitter Card data -->
        <meta name="twitter:card" value="summary">

        <!-- Open Graph data -->
        <meta property="og:title" content="Titulo" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content=" {{route('index')}}" />
        <meta property="og:image" content="{{ asset('img/' . $informacion['img_logo']) }}" />
        <meta property="og:description" content="Descripcion" />

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
        
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('lib/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('libs/slick/slick-theme.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Rest Stylesheet -->
        @yield('styles')
    </head>

    <body>
        <div class="wrapper">
            <!-- Header Start -->
            <div class="header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="brand">
                                <a href="{{route('index')}}">
                                    <img src="{{ asset('img/' . $informacion['img_logo']) }}" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="topbar">
                                <div class="topbar-col">
                                    <a href="#"><i class="fa fa-phone-alt"></i>{{ $informacion['telefono']}}</a>
                                </div>
                                <div class="topbar-col">
                                    <a href="mailto:info@example.com"><i class="fa fa-envelope"></i>{{ $informacion['email']}}</a>
                                </div>
                                <div class="topbar-col">
                                    <div class="topbar-social">
                                        <!--<a href="{{ $informacion['twitter']}}"><i class="fab fa-twitter"></i></a>-->
                                        <a href="{{ $informacion['facebook']}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="{{ $informacion['youtube']}}" target="_blank"><i class="fab fa-youtube"></i></a>
                                        <a href="{{ $informacion['instagram']}}" target="_blank"><i class="fab fa-instagram"></i></a>
                                        <a href="{{ $informacion['linkedin']}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://api.whatsapp.com/send?phone=+521{{ $informacion['no_whatsapp']}}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar navbar-expand-lg bg-light navbar-light">
                                <a href="#" class="navbar-brand">MENU</a>
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                    <div class="navbar-nav ml-auto">
                                        <a href="{{route('index')}}" class="nav-item nav-link{{ ($informacion['page'] == 'inicio' ? ' active' : '') }}">Inicio</a>
                                        <a href="{{route('nosotros')}}" class="nav-item nav-link{{ ($informacion['page'] == 'nosotros' ? ' active' : '') }}">Nosotros</a>
                                        <!--<a href="{{route('show_categorys')}}" class="nav-item nav-link{{ ($informacion['page'] == 'servicio' ? ' active' : '') }}">Servicios</a>-->
                                        <a href="{{route('show_all.products')}}" class="nav-item nav-link{{ ($informacion['page'] == 'servicio' ? ' active' : '') }}">Servicios</a>
                                        <a href="{{route('show_news')}}" class="nav-item nav-link{{ ($informacion['page'] == 'noticias' ? ' active' : '') }}">Noticias</a>
                                        <a href="{{route('contacto')}}" class="nav-item nav-link{{ ($informacion['page'] == 'contacto' ? ' active' : '') }}">Contactanos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->

            @yield('content')
            
            <!-- Footer Start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="footer-about">
                                <h2>{{ $informacion['nombre'] }}</h2>
                                <p>{{ $informacion['informacion_footer']}}</p>
                                <br>
                                <!--<a href="{{ $informacion['twitter'] }}" class="footer-social-link"><i class="fab fa-twitter fa-lg"></i></a>-->
                                <a href="{{ $informacion['facebook'] }}" target="_blank" class="footer-social-link"><i class="fab fa-facebook-f fa-lg"></i></a>
                                <a href="{{ $informacion['youtube'] }}" target="_blank" class="footer-social-link"><i class="fab fa-youtube fa-lg"></i></a>
                                <a href="{{ $informacion['instagram'] }}" target="_blank" class="footer-social-link"><i class="fab fa-instagram fa-lg"></i></a>
                                <a href="{{ $informacion['linkedin'] }}" target="_blank" class="footer-social-link"><i class="fab fa-linkedin-in fa-lg"></i></a>
                                <a href="https://api.whatsapp.com/send?phone=+521{{ $informacion['no_whatsapp'] }}" target="_blank" class="footer-social-link"><i class="fab fa-whatsapp fa-lg"></i></a>
                                
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="footer-about">
                                        <div class="footer-link">
                                            <h2>Empresa</h2>
                                            <p><i class="fa fa-phone-alt"></i>{{ $informacion['telefono']}}</p>
                                            <p><i class="fa fa-envelope"></i>{{ $informacion['email']}}</p>
                                            <p><i class="fa fa-clock"></i>{{ $informacion['horario']}}</p>
                                            <p><i class="fa fa-map-marker-alt"></i>{{ $informacion['direccion']}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="footer-link">
                                        <h2>Acesos del Sitio</h2>
                                        <a href="{{ route('index') }}">Inicio</a>
                                        <a href="{{route('nosotros')}}">Conocenos</a>
                                        <a href="{{route('show_categorys')}}">Servicios</a>
                                        <a href="{{route('show_all.products')}}">Productos</a>
                                        <a href="{{route('contacto')}}">Contactanos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="https://htmlcodex.com">HTML Codex</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('lib/slick/slick.min.js') }}"></script>
        <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('js/main.js') }}"></script>
        <!-- Rest Javascript -->
        @yield('script')
    </body>
</html>
