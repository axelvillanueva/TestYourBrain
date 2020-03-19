<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        <div class="container-fluid">
                <!--Barra de navegacion-->

          <header class="row">
            <div class="col-12 d-flex portada p-0"><img class="w-100" src="img/portada.jpg" alt=""></div>
            @guest
              <div class="col-12 p-0">
                <nav  id="barraN" class="col-12 barra-busqueda navbar navbar-expand-lg navbar-dark p-0 ">
                <a class="" href="/home"><img class="rounded-circle" src="images/logo.png" alt="logotipo" width="100px"></a>
                <a class="navbar-brand mb-0 mx-5 text-white" style="font-size: 30px;">Bienvenido</a>
                <button class="navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a href="/home" class="enlace-nav nav-link active text-white pl-2" style="text-align-last: center;">Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="enlace-nav nav-link active text-white" style="text-align-last: center;">Ranking global</a>
                    </li>
                    <li class="nav-item">
                      <a href="/faqs" class="enlace-nav nav-link active text-white" style="text-align-last: center;">Ayuda</a>
                    </li>
                  </ul>
                  <form class="form-inline justify-content-center">
                    <a class="enlace-nav btn text-white p-2 ml-3" style="font-size: 22px; background-color: red; margin-right: 0.29rem!important"href="/register">Registrarse</a>
                    <a class="enlace-nav btn text-white p-2 mr-3" style="font-size: 22px; background-color: red;" href="/login">Ingresar</a>
                  </form>
                </div>
              </nav>
            </div>
          @else
            <div class="col-12 p-0">
              <nav  id="barraN" class="col-12 barra-busqueda navbar navbar-expand-lg navbar-dark p-0 justify-content-center">
              <a class="" href="/home"><img class="rounded-circle" src="images/Logo.png" alt="logotipo" width="135px"></a>
                <a class="navbar-brand mb-0 mx-5 text-white" style="font-size: 30px;">Bienvenido</a>
                <button class="navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a href="/home" class="enlace-nav nav-link active text-white pl-2" style="text-align-last: center;">Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="enlace-nav nav-link active text-white pl-2" style="text-align-last: center;">Ranking global</a>
                    </li>
                    <li class="nav-item">
                      <a href="/faqs" class="enlace-nav nav-link active text-white" style="text-align-last: center;">Ayuda</a>
                    </li>

                  </ul>
                  <div class="nav-item dropdown" style="right:20px;">
                    <a class="nav-link dropdown-toggle active" data-toggle="dropdown" data-target="desplegable" href="#" style="text-align-last: end; color: white;"> <img src="{{Auth::user()->avatar!='no tiene'?'/storage/'.Auth::user()->avatar:'img/logo.jpg'}}" class="rounded-circle" alt="" style="height: 45px; width:45px;"> </a>
                    <div class="dropdown-menu px-3 py-3 text-center" style="background: black; right: 0px; left: auto; text-align-last: center; border-left: solid 3px; border-right:solid 3px; border-bottom:solid 3px;">
                      <a class="usuario item text-muted">{{Auth::user()->username}}</a>
                      <a class="usuario item text-muted pb-3" style="border-bottom: red solid 1px;">{{Auth::user()->email}}</a>
                      <div class="mt-4">
                        <a class="dropdown-item text-white" href="/perfil">Perfil</a>
                        <a class="dropdown-item text-white" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          Cerrar sesión {{--{{ __('Logout') }}--}}
                        </a>
                      </div>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                    </div>
                  </div>

                </div>
              </nav>
            </div>
          @endguest

        </header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
