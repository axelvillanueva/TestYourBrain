
                @extends('layouts.inicio')

                @section('content')



          <section class="row rounded pt-4">
            <article class="col-12 pt-5 pb-4" style="text-align: -webkit-center;">
              <h1 class="col-md-6 col-xs-12 py-3 mt-5" style="color:white; font-family: serif; font-size: 3em;font-weight:bold; background:crimson; opacity:90%">Demuestra tu conocimiento</h1>
              <hr class="col-7 border">
            </article>
            @foreach (App\Categoria::all() as $categoria)

            <div class="col-sm-6 col-md-4 p-5 d-flex"><a href="#" data-toggle="modal" data-target="#{{$categoria->getNombreSinEspacios()}}Modal" class="w-100"><img class="img-fluid rounded w-100 h-100 img-hov" src="{{$categoria->imagen}}" alt="" style="box-shadow: 10px 10px 6px -6px #777;"></a></div>

            <div class="modal fade" id="{{$categoria->getNombreSinEspacios()}}Modal" tabindex="-1" role="dialog" aria-labelledby="{{$categoria->getNombreSinEspacios()}}ModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content bg-dark text-white">
                    <div class="modal-header">
                      <h5 class="modal-title" id="{{$categoria->getNombreSinEspacios()}}ModalTitle">{{$categoria->nombre}}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <img class="img-fluid rounded mx-1" src="{{$categoria->imagen}}" alt="">
                    <div class="modal-body">
                      {{$categoria->descripcion}}
                    </div>
                  </div>
                </div>
              </div>

            @endforeach

            @guest
          <div class="container" style="padding-top:7%;margin-bottom: 7%;">
            <div class="card-deck text-center">
              <div class="card shadow-sm">
                <div class="card-header">
                  <h4>Estás registrado?</h4>
                </div>
                <div class="card-body">
                  <h2 class="card-title pricing-card-title m-5">Entrá a tu cuenta y Jugá!</h2>
                  <a class="btn text-white p-3 m3 col-md-10 cBT" style="background-color: crimson; font-size:16px;" href="Log-in.php">Ingresar!</a>
                </div>
              </div>
              <div class="card shadow-sm">
                <div class="card-header" style="padding-bottom: 20px;">
                  <h4 class="my-0">No estás registrado?</h4>
                </div>
                <div class="card-body">
                  <h2 class="card-title pricing-card-title m-5">Creá tu cuenta gratis! </h2>
                  <a class="btn text-white p-3 mr-3 col-md-12 cBT" style="background-color: crimson; font-size:16px;" href="Registro.php">Registrarse!</a>
                </div>
              </div>
            </div>
          </div>


          </section>
        @else
        </section>
        <footer class="position-absolute col-11 mt-4 mb-2">
             <nav id="black" class="navbar mt-5" style="height: 60px;">
                 <div class="ml-5 mb-2">
                 <a class="position-relative ml-5"  style="bottom: 15%;" href="/home"><img class="rounded-circle" src="../images/Logo.png" alt="logotipo" width="90px"></a>
                 <h6 class="font-italic position-relative text-white" style="margin-right: auto;"> &copy 2020 Derechos reservados.</h6>
               </div>
                 <ul class="nav  justify-content-end">
                     <li class="nav-item float-right">
                         <a class="nav-link position-relative" style="bottom: 15%;" href="https://es-la.facebook.com/" target="_black"><img class="border border-primary rounded-circle" src="img/icono-facebook.png" alt="logo-facebook" width="40px"></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link position-relative" style="bottom: 15%;" href="https://twitter.com/login?lang=es" target="_black"><img class="border border-primary rounded-circle" src="img/icono-twitter.png" alt="logo-twitter" width="40px"></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link position-relative" style="bottom: 15%;" href="https://www.instagram.com/?hl=es-la" target="_black"><img class="border border-primary rounded-circle" src="img/icono-instagram.png" alt="logo-instagram" width="40px"></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link position-relative" style="bottom: 15%;" href="https://www.youtube.com/?gl=AR&hl=es-419" target="_black"><img class="border border-danger rounded-circle" src="img/icono-youtube.png" alt="logo-youtub" width="40px"></a>
                     </li>
                 </ul>
             </nav>
         </footer>
       @endguest






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
