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
    <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/slick/slick-theme.css') }}">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

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
                        <input type="text" class="form-control" id="busqueda" name="busqueda"
                            placeholder="Producto" value="@isset($busqueda){{$busqueda}}@endisset">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Buscar</button>
                        </span>
                        </div>
                    </form>
                  </li>
                  <li class="active">
                    <a class="page-scroll" href="{{route('index')}}">Inicio</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="{{route('index')}}#about">Conócenos</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="{{route('index')}}#portfolio">Equipos y productos</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="{{route('index')}}#contact">Contáctanos</a>
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

  <!-- Start portfolio Area -->
  <div id="listado" class="listado-area fix" style="padding-top: 80px">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
              <h2>Listado de articulos</h2>
          </div>
        </div>
      </div>
      @isset($busqueda)
      <h3>Articulos relacionados con: {{ $busqueda }}</h3>
      @endisset
      @isset($category)
      <h3>Articulos por categoria: {{ $category->name }}</h3>
      @endisset
      <br>
        @forelse ($productos as $producto)
        @if ($loop->index == 0 || $loop->index == 3 || $loop->index == 6 || $loop->index == 9 || $loop->index == 12)
        <div class="row">
        @endif
        <div class="col-md-4 text-center">
            <div class="col-md-12">
              <a href="{{route('show.product', $producto)}}"><img src="{{ asset('img/products'. $producto->img_name) }}" width="200px" height="200px"  alt=""></a>
              <p>{{$producto->name}}</p>
            </div>
            <div class="col-xs-8 col-xs-offset-2">
                <a href="{{route('show.product', $producto)}}" class="btn btn-info pull-left">Ver mas</a>
                <a href="#contactanos" class="btn btn-info pull-right"
                    data-toggle="modal" data-target="#contactanos">Cotizar</a>
            </div>
        </div>
        @if ($loop->index == 2 || $loop->index == 5 || $loop->index == 8 || $loop->index == 11 || $loop->index == 14)
        </div>
        <br>
        @endif
        @empty
        <div class="col-md-12">
            No se encontraron productos.
        </div>
        @endforelse
        <div class="col-md-12 text-center">
            {{ $productos->links() }}
        </div>
      </div>
    </div>
  </div>
  <!-- Start Footer bottom Area -->
  <footer style="padding-top: 50px">
    <div class="footer-area" >
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

  <!-- Contact Form JavaScript File -->
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
