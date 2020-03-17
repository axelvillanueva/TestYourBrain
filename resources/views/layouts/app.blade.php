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
    <div id="app">
        {{--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->--}}
                        @guest
                        <nav  id="barraN" class="col-12 barra-busqueda navbar navbar-expand-lg navbar-dark p-0 ">
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

                            {{--<li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>--}}
                          {{--@if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif--}}
                        @else
                            {{--<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>--}}

                            <nav  id="barraN" class="col-12 barra-busqueda navbar navbar-expand-lg navbar-dark p-0 justify-content-center">
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
                                  <a class="nav-link dropdown-toggle active" data-toggle="dropdown" data-target="desplegable" href="#" style="text-align-last: end; color: white;"> <img src="/storage/{{Auth::user()->avatar!=null?Auth::user()->avatar :img/logo.jpg}}" class="rounded-circle" alt="" style="height: 45px; width:45px;"> </a>
                                  <div class="dropdown-menu px-3 pt-3 pb-4" style="background: black; right: 0px; left: auto; text-align-last: center; border-left: solid 3px; border-right:solid 3px; border-bottom:solid 3px;">
                                    <a class="usuario item text-muted">{{Auth::user()->username}} <br> {{Auth::user()->email}} </a>
                                    <a class="enlace-nav dropdown-item text-white mt-3 pt-3" style="border-top: red solid 1px;" href="/perfil">Perfil</a>
                                    <a class="dropdown-item text-white" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Cerrar sesión {{--{{ __('Logout') }}--}}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                  </div>
                                </div>

                              </div>
                            </nav>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
