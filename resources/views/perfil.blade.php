@extends('layouts.app')

@section('content')


<div class="container-fluid">
          <div class="container">
              <div class="row justify-content-center">

                  <div class="card col-md-4 col-sm-8 my-5" style="background: url(img/bg-117.jpg); border: solid 4px;">
                      <img class="card-img-top rounded-circle mt-3" style="align-self:center; width: 72%; height: 250px; border: #863c3c solid 4px;" src="/storage/{{Auth::user()->avatar!=null?Auth::user()->avatar :img/logo.jpg}}" alt="Card image cap">
                      <div class="card-body text-center" style="">
                          <h3 class="card-title" style="color:black; font-weight: bold; background:rgba(186, 59, 59, 0.60);">{{Auth::user()->username}} </h3>
                          <p class="card-text my-4" style="font-size: 22px; font-weight: bold; color: black;background:rgba(186, 59, 59, 0.60); ">Nivel: 0 <br> Trivias resueltas: 0 <br></p>
                          <a href="Inicio.php" class="btn btn-danger">Ir a jugar!</a>
                      </div>
                  </div>
                  <div class="col-md-8 offset-1 ml-0 my-5" style="background:rgba(186, 59, 59, 0.60); border-top: solid 4px; border-right: solid 4px; border-bottom: solid 4px;">
                  <h1 style="color:black;">Hola!</h1>
                  </div>
              </div>
          </div>
      </div>
@endsection
