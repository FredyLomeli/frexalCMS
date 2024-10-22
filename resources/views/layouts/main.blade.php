<!DOCTYPE html>
<html lang="mx">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Boxed Layout</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @yield('styles')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('adminIndex') }}" class="nav-link">Inicio</a>
      </li>
      @yield('links')
    </ul>

    <!-- SEARCH FORM
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>-->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('adminIndex') }}" class="brand-link">
      <img src="{{ asset('img/AdminLTELogo.png') }}"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin MH</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/user_icon.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth()->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-clipboard-list"></i>
                    <p> Información General <i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('informacion') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>General</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('save.branding', ['branding' => 'nosotros']) }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Nosotros</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('save.branding', ['branding' => 'mision']) }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Misión</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('save.branding', ['branding' => 'vision']) }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Visión</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('save.branding', ['branding' => 'valores']) }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Valores</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('edit.welcome') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Mensaje Bienvenida</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('edit.video') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Video descriptivo</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('carrusel') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Carrusel</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('category') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Categorias</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('productos') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Servicios</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('asks') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Preguntas Frecuentes</p>
                </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('posts') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Noticias</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('referencias') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Referecias</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('registrar') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Registrar usuario</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="far fa-circle nav-icon"></i>
                <p>Cerrar Sesion</p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            @yield('header')
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; MH</a>.</strong> Todos los derechos reservados.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
@yield('script')
</body>
</html>
