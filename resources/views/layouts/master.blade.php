<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
  	<link rel="icon" type="image/png" href="{{asset('img/cubiertos.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('bootstrap4/css/bootstrap.min.css')}}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="{{asset('bootstrap4/css/roboto.css')}}">
    <!--http://fonts.googleapis.com/css?family=Roboto:300,400,500,700-->
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('bootstrap4/css/style.default.css')}}" id="theme-stylesheet">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{asset('bootstrap4/css/grasp_mobile_progress_circle-1.0.0.min.css')}}">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('bootstrap4/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('bootstrap4/img/favicon.ico')}}">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="{{asset('bootstrap4/js/99347ac47f.js')}}"></script>
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="{{asset('bootstrap4/css/icons.css')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <!-- Styles -->
    <!--<link href="{#{ asset('css/app.css') }}" rel="stylesheet">-->
    <script type="text/javascript" href="vue/js/vue.min.js">

    </script>
</head>
<body>
  <nav class="side-navbar">
    <div class="side-navbar-wrapper">
      <div class="sidenav-header d-flex align-items-center justify-content-center">
        <div class="sidenav-header-inner text-center"><img src="{{asset('bootstrap4/img/avatar-1.jpg')}}" alt="person" class="img-fluid rounded-circle">
          <h2 class="h5 text-uppercase">{{ Auth::user()->name }} <span class="caret"></span></h2><span class="text-uppercase">Usuario</span>
        </div>
        <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>S</strong><strong class="text-primary">G</strong></a></div>
      </div>
      <div class="main-menu">
        <ul id="side-main-menu" class="side-menu list-unstyled">
          <li class="active"><a href="{{url('home')}}"> <i class="icon-home"></i><span>Home</span></a></li>
          <ul id="side-admin-menu" class="side-menu list-unstyled">
            <li> <a href="#pages-nav-list-1" data-toggle="collapse" aria-expanded="false"><i class="icon-list-1"></i><span>Categorías</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list-1" class="collapse list-unstyled">
                <li> <a href="#">Categoría</a></li>
                <li> <a href="#">Sub-Categoria</a></li>
              </ul>
            </li>
          </ul>
          <li> <a href="index.html"> <i class="icon-bill"></i><span>Productos</span></a></li>
          <li> <a href="{{url('gastronomica/proveedores/proveedores/proveedor')}}"> <i class="icon-check"></i><span>Proveedores</span></a></li>
          <ul id="side-admin-menu" class="side-menu list-unstyled">
            <li> <a href="#pages-nav-list-2" data-toggle="collapse" aria-expanded="false"><i class="icon-pencil-case"></i><span>Compras</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list-2" class="collapse list-unstyled">
                <li> <a href="#">Compras</a></li>
                <li> <a href="#">Consultar Compras</a></li>
                <li> <a href="#">Consultar Compras Fecha</a></li>
                <li> <a href="#">Consultar Compras Mes</a></li>
              </ul>
            </li>
          </ul>
          <li> <a href="index.html"> <i class="icon-check"></i><span>Clientes</span></a></li>
          <ul id="side-admin-menu" class="side-menu list-unstyled">
            <li> <a href="#pages-nav-list-3" data-toggle="collapse" aria-expanded="false"><i class="icon-pencil-case"></i><span>Ventas</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list-3" class="collapse list-unstyled">
                <li> <a href="#">Ventas</a></li>
                <li> <a href="#">Consultar Ventas</a></li>
                <li> <a href="#">Consultar Ventas Fecha</a></li>
                <li> <a href="#">Consultar Ventas Mes</a></li>
              </ul>
            </li>
          </ul>
          <ul id="side-admin-menu" class="side-menu list-unstyled">
            <li> <a href="#pages-nav-list-4" data-toggle="collapse" aria-expanded="false"><i class="icon-presentation"></i><span>Reportes/Compras</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list-4" class="collapse list-unstyled">
                <li> <a href="#">Reporte General</a></li>
                <li> <a href="#">Reporte Mensual</a></li>
                <li> <a href="#">Reportes por Proveedor</a></li>
              </ul>
            </li>
          </ul>
          <ul id="side-admin-menu" class="side-menu list-unstyled">
            <li> <a href="#pages-nav-list-4" data-toggle="collapse" aria-expanded="false"><i class="icon-presentation"></i><span>Reportes/Ventas</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list-4" class="collapse list-unstyled">
                <li> <a href="#">Reporte General</a></li>
                <li> <a href="#">Reporte Mensual</a></li>
                <li> <a href="#">Reportes por Clientes</a></li>
              </ul>
            </li>
          </ul>
          <li> <a href="index.html"> <i class="icon-user"></i><span>Usuarios</span></a></li>
          <li> <a href="index.html"> <i class="icon-flask"></i><span>Empresa</span></a></li>


          <li> <a href="#"> <i class="icon-mail"></i><span>Demo</span>
              <div class="badge badge-warning">6 New</div></a></li>
        </ul>
      </div>
      <!--<div class="admin-menu">
        <ul id="side-admin-menu" class="side-menu list-unstyled">
          <li> <a href="#pages-nav-list" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Dropdown</span>
              <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
            <ul id="pages-nav-list" class="collapse list-unstyled">
              <li> <a href="#">Page 1</a></li>
              <li> <a href="#">Page 2</a></li>
              <li> <a href="#">Page 3</a></li>
              <li> <a href="#">Page 4</a></li>
            </ul>
          </li>
          <li> <a href="#"> <i class="icon-screen"> </i><span>Demo</span></a></li>
          <li> <a href="#"> <i class="icon-flask"> </i><span>Demo</span>
              <div class="badge badge-info">Special</div></a></li>
        </ul>
      </div>-->
    </div>
  </nav>

  <div class="page home-page">
    <header class="header">
      <nav class="navbar">
        <div class="container-fluid">
          <div class="navbar-holder d-flex align-items-center justify-content-between">
            <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                <div class="brand-text hidden-sm-down"><span>System </span><strong class="text-primary"> Gastronomica</strong></div></a></div>
            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
              <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                <ul aria-labelledby="notifications" class="dropdown-menu">
                  <li><a rel="nofollow" href="#" class="dropdown-item">
                      <div class="notification d-flex justify-content-between">
                        <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                        <div class="notification-time"><small>4 minutes ago</small></div>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item">
                      <div class="notification d-flex justify-content-between">
                        <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                        <div class="notification-time"><small>4 minutes ago</small></div>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item">
                      <div class="notification d-flex justify-content-between">
                        <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                        <div class="notification-time"><small>4 minutes ago</small></div>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item">
                      <div class="notification d-flex justify-content-between">
                        <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                        <div class="notification-time"><small>10 minutes ago</small></div>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                <ul aria-labelledby="notifications" class="dropdown-menu">
                  <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                      <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                      <div class="msg-body">
                        <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                      <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                      <div class="msg-body">
                        <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                      <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                      <div class="msg-body">
                        <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link logout"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout <i class="fa fa-sign-out"></i>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <!--<a href="login.html" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a>-->
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    @yield('content')
    <footer class="main-footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <p>Your company &copy; 2017-2019</p>
          </div>
          <div class="col-sm-6 text-right">
            <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
          </div>
        </div>
      </div>
    </footer>
  </div>

    <!-- Javascript files-->
    <script src="{{asset('bootstrap4/js/jquery.min.js')}}"></script>
    <script src="{{asset('bootstrap4/js/tether.min.js')}}"></script>
    <script src="{{asset('bootstrap4/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bootstrap4/js/jquery.cookie.js')}}"> </script>
    <script src="{{asset('bootstrap4/js/grasp_mobile_progress_circle-1.0.0.min.js')}}"></script>
    <script src="{{asset('bootstrap4/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('bootstrap4/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('bootstrap4/js/Chart.min.js')}}"></script>
    <script src="{{asset('bootstrap4/js/charts-home.js')}}"></script>
    <script src="{{asset('bootstrap4/js/front.js')}}"></script>
    <!-- Scripts -->
    <!--<script src="{#{ asset('js/app.js') }}"></script>-->
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
</body>
</html>
