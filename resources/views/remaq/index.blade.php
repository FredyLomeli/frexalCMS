<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>REMAQ de los Altos</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link rel="stylesheet" >
  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/nivo-slider/css/nivo-slider.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/owl.carousel.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/owl.transitions.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/venobox/venobox.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('lib/slick/slick.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('lib/slick/slick-theme.css') }}">

  <!-- Nivo Slider Theme -->
  <link href="{{ asset('css/nivo-slider-theme.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

  <style type="text/css">

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 80%;
        margin: 20px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }

    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
  </style>

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="{{route('index')}}">
                  <!-- <h1><span>REMAQ</span> de los Altos</h1> -->
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <img src="{{asset('img/logo6.png') }}" width="200px"  alt="" title="">
                </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <form action="{{ route('products_route') }}" method="POST">
                        {{csrf_field()}}
                        <div class="input-group page-scroll" style="padding-top: 17px; width: 300px;">
                        <input type="text" class="form-control" id="busqueda" name="busqueda"  placeholder="Producto">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Buscar</button>
                        </span>
                        </div>
                    </form>
                  </li>
                  <li class="active">
                    <a class="page-scroll" href="#home">Inicio</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">Conócenos</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#portfolio">Equipos y productos</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#contact">Contáctanos</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides">
            @forelse ($carouseles as $carousel)
                <img src="{{ asset('img/slider/'.$carousel->img_name) }}" alt="" title="#slider-direction-{{$carousel->id}}" />
            @empty
            @endforelse
        </div>
        @forelse ($carouseles as $carousel)
            <div id="slider-direction-{{$carousel->id}}" class="slider-direction slider-one">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- layer 1 -->
                                <div class="layer-1-1 wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h2 class="title1">{{$carousel->titulo}}</h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">{{$carousel->descripcion}}</h1>
                                </div>
                                <!-- layer 3 -->
                                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-Ftele" href="#portfolio">Ver productos</a>
                                    <a class="ready-btn page-scroll" href="#about">Conocenos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse
    </div>
</div>
<!-- End Slider Area -->

<!-- Start About area -->
<div id="about" class="about-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>Conócenos</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single-well start-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-left">
                    <div class="single-well">
                        <img src="{{ asset('img/about/' . $informacion['img_mision']) }}" alt="">
                    </div>
                </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-middle">
                    <div class="single-well">
                        <h3 class="sec-head">Nuestra Misión</h3>
                        <p class="branding-text">{{ $informacion['mision'] }}</p>
                    </div>
                </div>
            </div>
            <!-- End col-->
        </div>
        <hr>
        <div class="row">
            <!-- single-well end-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-middle">
                    <div class="single-well">
                        <h4 class="sec-head">Nuestra Visión</h4>
                        <p class="branding-text">{{ $informacion['vision'] }}</p>
                    </div>
                </div>
            </div>
            <!-- single-well start-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-left">
                    <div class="single-well">
                        <img src="{{ asset('img/about/' . $informacion['img_vision']) }}" alt="">
                    </div>
                </div>
            </div>
            <!-- End col-->
        </div>
        <!-- single-well start-->
        <hr>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-left">
                    <div class="single-well">
                        <img src="{{ asset('img/about/' . $informacion['img_valores']) }}" alt="">
                    </div>
                </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-middle">
                    <div class="single-well">
                        <h4 class="sec-head">Valores</h4>
                        @for ($i = 0; $i < sizeof($informacion['valores']); $i++)
                        @if ($informacion['valores'][$i] != null)
                        <ul>
                            <li class="branding-text">
                                <i class="fa fa-check"></i> {{$informacion['valores'][$i]}}
                            </li>
                        </ul>
                        @endif
                        @endfor
                    </div>
                </div>
            </div>
            <!-- End col-->
        </div>
    </div>
</div>
<!-- End About area -->
  <!-- Start portfolio Area -->
    <div id="portfolio" class="portfolio-area fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Catálogos de productos</h2>
                    </div>
                </div>
            </div>
            <section class="autoplay slider">
                <div class="single-awesome-project">
                    <div class="awesome-img">
                        <a href="{{route('show_categorys')}}">
                            <img src="{{ asset('img/portfolio/categorias.jpg') }}" alt="" />
                        </a>
                        <div class="add-actions text-center hidden-xs">
                            <div class="project-dec">
                                <a href="{{route('show_categorys')}}">
                                    <h4>Mostrar todas</h4>
                                    <span>las categorias</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @forelse ($categorys as $category)
                <div class="single-awesome-project">
                    <div class="awesome-img">
                        @if ($category->products_count > 0)
                        <a href="{{route('show.products_by_category', $category)}}">
                        @else
                        <a href="#contactanos" data-toggle="modal" data-target="#contactanos">
                        @endif<img src="{{ asset('img/portfolio/' . $category->img_name) }}" alt="" /></a>
                        <div class="add-actions text-center hidden-xs">
                            <div class="project-dec">
                                @if ($category->products_count > 0)
                                <a href="{{route('show.products_by_category', $category)}}">
                                @else
                                <a href="#contactanos" data-toggle="modal" data-target="#contactanos">
                                @endif
                                <!--<a class="venobox" data-gall="myGallery" href="img/portfolio/6.jpeg">-->
                                <h4>{{ $category->name }}</h4>
                                @if ($category->products_count > 0)
                                <span>Articulos relacionados</span>
                                @else
                                <span>Realiza tu cotización</span>
                                @endif

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse
            </section>
        </div>
    </div>
  <!-- Start contact Area -->
  <div id="contact" class="contact-area area-padding">
    <div class="contact-inner">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contáctanos</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                    <h4>Telefonos</h4>
                    <span>Celular: {{ $informacion['telefono']}}</span><br>
                    <span>Oficina: {{ $informacion['telefono_oficina']}}</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                    <h4>Correo y horarios</h4>
                    <span>Email: {{ $informacion['email']}}</span><br>
                    <span>Horario: {{ $informacion['horario']}}</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                    <h4>Dirección</h4>
                    <span>{{ $informacion['direccion']}}</span><br>
                    <span>{{ $informacion['municipio']}}, {{ $informacion['estado']}}</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <h4>Si prefieres envíanos mensaje directo a nuestras redes sociales.</h4>
        </div>
        <div class="row">
          <div class="col-md-1 col-md-offset-4 col-xs-4 text-center">
            <a href="https://api.whatsapp.com/send?phone=+521{{ $informacion['no_whatsapp']}}" target=”_blank”>
              <img src="img/whatsapp.png" alt="Envianos un WhatsApp" width="50" height="50">
            </a>
          </div>
          <div class="col-md-1 col-xs-4 text-center">
            <a href="{{ $informacion['facebook']}}" target=”_blank”>
              <img src="img/facebook.png" alt="Envianos un mensaje por Facebook" width="50" height="50">
            </a>
          </div>
          <div class="col-md-1 col-xs-4 text-center">
            <a href="{{ $informacion['instagram']}}" target=”_blank”>
              <img src="img/instagram.png" alt="Envianos un mensaje por instagram" width="50" height="50">
            </a>
          </div>
        </div>
        <br>
        <div class="row text-center">
          <h4>También puedes llenar el siguiente formulario.</h4>
        </div>
        <div class="row">
          <!-- Start Google Map -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d659.2827716508166!2d-102.75248852068736!3d20.81285858769398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429262eed4a1019%3A0x28e204d415a8203!2sBlvd.%20Anacleto%20Glez%20Flores%20Nte.%20180%2C%20San%20Miguel%2C%2047660%20Tepatitl%C3%A1n%20de%20Morelos%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1596769075867!5m2!1ses-419!2smx" width="100%" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->
          <!-- Start  contact -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form contact-form">
                    <form action="{{ route('contact.mail') }}" method="post" role="form" class="contactForm">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Tu nombre" required/>
                            @if ($errors->has('name'))
                                <small class="text-center text-danger">{{ $errors->first('name') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="telefono"
                                id="telefono" placeholder="Teléfono" minlength="10" required/>
                            @if ($errors->has('telefono'))
                                <small class="text-center text-danger">{{ $errors->first('telefono') }}</small>
                            @endif
                        </div>
                            <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Correo electrónico" required/>
                            @if ($errors->has('email'))
                                <small class="text-center text-danger">{{ $errors->first('email') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="no_serie" id="no_serie"
                                placeholder="Número de Serie de la máquina" required/>
                            @if ($errors->has('no_serie'))
                                <small class="text-center text-danger">{{ $errors->first('no_serie') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="mod_maquina"
                                id="mod_maquina" placeholder="Modelo de la maquina" required/>
                            @if ($errors->has('mod_maquina'))
                                <small class="text-center text-danger">{{ $errors->first('mod_maquina') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="no_pieza"
                                id="no_pieza" placeholder="Numero de pieza (Opcional)" />
                            @if ($errors->has('no_pieza'))
                                <small class="text-center text-danger">{{ $errors->first('no_pieza') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message"
                                rows="5" required></textarea>
                            @if ($errors->has('message'))
                                <small class="text-center text-danger">{{ $errors->first('message') }}</small>
                            @endif
                        </div>
                        <div class="text-center"><button type="submit">Enviar solicitud</button></div>
                    </form>
                </div>
            </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->
  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>REMAQ</span> de los Altos</h2>
                </div>

                <p>{{ $informacion['descripcion_empresa']}}</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="{{ $informacion['facebook']}}" target=”_blank”><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="{{ $informacion['instagram']}}" target=”_blank”><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="https://api.whatsapp.com/send?phone=+521{{ $informacion['no_whatsapp']}}" target=”_blank”><i class="fa fa-whatsapp"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Información</h4>
                <p>{{ $informacion['informacion_footer']}}</p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> {{ $informacion['telefono']}}</p>
                  <p><span>Email:</span> {{ $informacion['email']}}</p>
                  <p><span>Horarios:</span> {{ $informacion['horario']}}</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Catalogos</h4>
                <div class="flicker-img">
                    <a href="{{route('show_categorys')}}">
                        <img src="{{ asset('img/portfolio/categorias.jpg') }}" alt="Todas las categorias" />
                    </a>
                    @forelse ($categorys as $category)
                        @if ($loop->index < 5)
                            @if ($category->products_count > 0)
                            <a href="{{route('show.products_by_category', $category)}}">
                            @else
                            <a href="#contactanos" data-toggle="modal" data-target="#contactanos">
                            @endif
                            <img src="{{ asset('img/portfolio/' . $category->img_name) }}" alt="{{$category->name}}"></a>
                        @endif
                    @empty
                    @endforelse
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Modal 1 -->
  <div class="modal fade contactanos" tabindex="-1" aria-labelledby="contactanos" aria-hidden="true" id="contactanos" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title">¡Contáctanos! Cuanto antes tendremos tu cotización</h5>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="col-xs-12 text-center">Pregunta desde nuestras redes sociales.</div>
            <div class="row">
              <div class="col-md-4 col-md-offset-2 col-xs-6">
                <a href="https://api.whatsapp.com/send?phone=+521{{ $informacion['no_whatsapp']}}"
                  class="btn btn-success btn-xs" target=”_blank”>Contáctanos por WhatsApp</a>
              </div>
              <div class="col-md-4 col-xs-6">
                <a href="{{ $informacion['facebook']}}" target=”_blank”
                  class="btn btn-primary btn-xs">Contáctanos por Facebook</a>
              </div>
            </div>
            <div class="col-xs-12 text-center">Si lo prefieres llena el siguiente formulario</div>

            <!-- Formulario de contacto -->
            <div class="form contact-form">
                <form action="{{ route('contact.mail') }}" method="post" role="form" class="contactForm">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Tu nombre" required/>
                        @if ($errors->has('name'))
                            <small class="text-center text-danger">{{ $errors->first('name') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="telefono"
                            id="telefono" placeholder="Telefono" minlength="10" required/>
                        @if ($errors->has('telefono'))
                            <small class="text-center text-danger">{{ $errors->first('telefono') }}</small>
                        @endif
                    </div>
                        <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Correo electronico" required/>
                        @if ($errors->has('email'))
                            <small class="text-center text-danger">{{ $errors->first('email') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="no_serie" id="no_serie"
                            placeholder="Numero de Serie de la maquina" required/>
                        @if ($errors->has('no_serie'))
                            <small class="text-center text-danger">{{ $errors->first('no_serie') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="mod_maquina"
                            id="mod_maquina" placeholder="Modelo de la maquina" required/>
                        @if ($errors->has('mod_maquina'))
                            <small class="text-center text-danger">{{ $errors->first('mod_maquina') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="no_pieza"
                            id="no_pieza" placeholder="Numero de pieza (Opcional)" />
                        @if ($errors->has('no_pieza'))
                            <small class="text-center text-danger">{{ $errors->first('no_pieza') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="message" name="message"
                            rows="5" required></textarea>
                        @if ($errors->has('message'))
                            <small class="text-center text-danger">{{ $errors->first('message') }}</small>
                        @endif
                    </div>
                    <div class="text-center"><button type="submit">Enviar solicitud</button></div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/venobox/venobox.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/knob/jquery.knob.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/parallax/parallax.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/nivo-slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/appear/jquery.appear.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}" type="text/javascript"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>


  <script src="{{ asset('lib/slick/slick.js') }}" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
        $(".center").slick({
            dots: true,
            infinite: true,
            centerMode: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
        $('.autoplay').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    });
</script>
@include('messages.info_alert')
</body>
</html>
