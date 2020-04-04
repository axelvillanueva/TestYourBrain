@extends('layouts.app')

@section('content')

<div class="px-5 mx-4">
    <section class="row justify-content-center contenedor-formulario pt-5">
        <div class="col-lg-6 col-md-8 border border-dark text-white formulario-registro mx-auto"
            style="background:rgba(186, 59, 59, 0.60);">
            <img class="position-absolute border border-dark rounded-circle d-block lobo"
                src="{{ asset('img/logo.jpg') }}" alt="logo de ejemplo"
                style="width: 120px; top: -50px; left: calc(50% - 50px);">
            <h2 class="text-center pt-4 mt-5">Registrarse</h2>
            <form id="formulario" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                                    <!--NOMBRE-->

                <div class="form-group floating-label-form-group controls mx-4">
                    <label for="name" class="font-weight-bold">{{ __('Nombre') }}</label>

                    <input id="name" type="text"
                        class="w-100 mb-1 form-control form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Escriba aquí su nombre">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                                  <!--NOMBRE DE USUARIO-->

                <div class="form-group floating-label-form-group controls mx-4">
                    <label for="username" class="font-weight-bold">{{ __('Nombre de Usuario') }}</label>

                    <input id="username" type="text"
                        class="w-100 mb-1 form-control form-control @error('username') is-invalid @enderror"
                        name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Escriba un nombre de usuario">

                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                                  <!--CORREO ELECTRÓNICO-->

                <div class="form-group floating-label-form-group controls mx-4">
                    <label for="email" class="font-weight-bold">{{ __('Email') }}</label>

                    <input id="email" type="text"
                        class="w-100 mb-1 form-control form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Escriba aquí su correo electrónico">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                <!--PAÍS-->
                <div class="form-group floating-label-form-group controls mx-4">
                  <label for="pais" class="font-weight-bold">País:</label>
                  <select name="pais" class="col-lg-12 md-12 xs-12 text-white" style="background: #c44545;">
                    @foreach (App\User::Paises as $posicion=>$pais)
                    <option value="{{$posicion}}">
                      {{$pais}}
                    </option>
                    @endforeach
                  </select>
                </div>
              </div>

                                      <!--CONTRASEÑA-->

                <div class="form-group floating-label-form-group controls mx-4">
                    <label for="password" class="font-weight-bold">{{ __('Contraseña') }}</label>

                    <input id="password" type="password"
                        class="w-100 mb-1 form-control form-control @error('password') is-invalid @enderror" name="password"
                        value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="Escriba una contraseña">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                                   <!--CONFIRMAR CONTRASEÑA-->

                <div class="form-group floating-label-form-group controls mx-4">
                    <label for="password-confirm"
                    class="font-weight-bold">{{ __('Confirmar contraseña') }}</label>

                        <input id="password-confirm" type="password" class="w-100 mb-1 form-control form-control" name="password_confirmation"
                            required autocomplete="new-password" placeholder="Vuelva a escribir la contraseña">
                    </input>
                </div>

                                    <!--FOTO DE PERFIL-->

                <div class="form-group">
                <div class="form-group floating-label-form-group controls mx-4">
                  <label for="avatar" class="font-weight-bold">Imagen de perfil: </label>
                  <input class="mt-3" type="file" name="avatar">
                </div>
              </div>

                <div class="form-group mx-auto pb-2">

                        <button type="submit" class="btn rounded ml-4 mt-4 text-white bg-danger px-4 pt-1" style="font-size:20px;" id="sendMessageButton">
                            {{ __('Registrar') }}
                        </button>
                </div>
                <a class="help-block Iniciar-sesión float-right text-decoration-none mb-4 text-white"
                href="{{ route('login') }}"> Ya tienes una cuenta? Inicia sesión</a>

            </form>
        </div>
    </section>
</div>



  {{--<div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('Register') }}</div>

                  <div class="card-body">
                      <form method="POST" action="{{ route('register') }}">
                          @csrf

                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                  @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                              <div class="col-md-6">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                              </div>
                          </div>

                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Register') }}
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>--}}

@endsection
