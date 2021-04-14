<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')GlobalSocialMedia</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap Agency Template" name="keywords">
        <meta content="Bootstrap Agency Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('lib/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/slick/slick-theme.css') }}" rel="stylesheet">
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
                                <a href="index.html">
                                    <img src="{{ asset('img/logo.png') }}" alt="Logo">
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
                                        <a href="{{ $informacion['facebook']}}"><i class="fab fa-twitter"></i></a>
                                        <a href="{{ $informacion['facebook']}}"><i class="fab fa-facebook-f"></i></a>
                                        <a href="{{ $informacion['facebook']}}"><i class="fab fa-youtube"></i></a>
                                        <a href="{{ $informacion['instagram']}}"><i class="fab fa-instagram"></i></a>
                                        <a href="{{ $informacion['instagram']}}"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="{{ $informacion['no_whatsapp']}}"><i class="fab fa-whatsapp"></i></a>
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
                                        <a href="{{route('index')}}" class="nav-item nav-link active">Inicio</a>
                                        <a href="{{route('index')}}" class="nav-item nav-link">Nosotros</a>
                                        <a href="{{route('index')}}" class="nav-item nav-link">Servicios</a>
                                        <a href="{{route('index')}}" class="nav-item nav-link">Productos</a>
                                        <a href="{{route('index')}}" class="nav-item nav-link">Contactanos</a>
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
                                <h2>Quienes somos</h2>
                                <p>
                                    {{ $informacion['descripcion_empresa']}}
                                </p>
                                <br>
                                <p><i class="fa fa-map-marker-alt"></i>{{ $informacion['direccion']}}</p>
                                <p><i class="fa fa-phone-alt"></i>{{ $informacion['telefono']}}</p>
                                <p><i class="fa fa-envelope"></i>{{ $informacion['email']}}</p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="footer-link">
                                        <h2>Acesos del Sitio</h2>
                                        <a href="">Conocenos</a>
                                        <a href="">Servicios</a>
                                        <a href="">Productos</a>
                                        <a href="">Contactanos</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="footer-link">
                                        <h2>Useful Link</h2>
                                        <a href="">Our Clients</a>
                                        <a href="">Clients Review</a>
                                        <a href="">Ongoing Customer</a>
                                        <a href="">Customer Support</a>
                                        <a href="">FAQs</a>
                                        <a href="">Site Map</a>
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
