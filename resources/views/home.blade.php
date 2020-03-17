<header class="row">
  <div class="col-12 d-flex portada p-0"><img class="w-100" src="img/portada.jpg" alt=""></div>

</header>

  <div class="container-fluid">
                <!--Barra de navegacion-->

                @extends('layouts.app')

                @section('content')


          <section class="row rounded pt-4">
            <article class="col-12 pt-5 pb-4" style="text-align: -webkit-center;">
              <h1 class="col-md-6 col-xs-12 py-3 mt-5" style="color:white; font-family: serif; font-size: 3em;font-weight:bold; background:crimson; opacity:90%">Demuestra tu conocimiento</h1>
              <hr class="col-7 border">
            </article>
<!--            </?php foreach ($results as $result): ?>

            <div class="col-sm-6 col-md-4 p-5 d-flex"><a href="#" data-toggle="modal" data-target="#</?=$result->getNombreSinEspacios()?>Modal" class="w-100"><img class="img-fluid rounded w-100 h-100 img-hov" src="</?=$result->getImagen()?>" alt="" style="box-shadow: 10px 10px 6px -6px #777;"></a></div>

            <div class="modal fade" id="</?=$result->getNombreSinEspacios()?>Modal" tabindex="-1" role="dialog" aria-labelledby="</?=$result->getNombreSinEspacios()?>ModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content bg-dark text-white">
                    <div class="modal-header">
                      <h5 class="modal-title" id="</?=$result->getNombreSinEspacios()?>ModalTitle"></?=$result->getNombre()?></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <img class="img-fluid rounded mx-1" src="</?=$result->getImagen()?>" alt="">
                    <div class="modal-body">
                      </?=$result->getDescripcion()?>
                    </div>
                  </div>
                </div>
              </div>

            </?php endforeach;?>
-->

            <div class="container" style="padding-top:7%;margin-bottom: 7%;">
              <div class="card-deck text-center">
                <div class="card shadow-sm">
                  <div class="card-header">
                    <h4>Estás registrado?</h4>
                  </div>
                  <div class="card-body">
                    <h2 class="card-title pricing-card-title m-5">Entrá a tu cuenta y Jugá!</h2>
                    <a class="btn text-white p-3 m3 col-md-10 cBT" style="background-color: crimson;" href="{{ route('login') }}">Ingresar!</a>
                  </div>
                </div>
                <div class="card shadow-sm">
                  <div class="card-header" style="padding-bottom: 20px;">
                    <h4 class="my-0">No estás registrado?</h4>
                  </div>
                  <div class="card-body">
                    <h2 class="card-title pricing-card-title m-5">Creá tu cuenta gratis! </h2>
                    <a class="btn text-white p-3 mr-3 col-md-12 cBT" style="background-color: crimson;" href="{{ route('register') }}">Registrarse!</a>
                  </div>
                </div>
              </div>
            </div>


          </section>



      </div>

{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>--}}
@endsection
