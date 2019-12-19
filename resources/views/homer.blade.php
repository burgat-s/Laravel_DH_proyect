

@extends('layouts.app')

@section('titulo')
 Relojes DTS
@endsection

@section('content')
  @php
  use App\User;


  $usuario = Auth::user() ;
  @endphp
    <div class="container-fluid">


      <section class="row destacados">
        <div class="col-12 col-md-10 offset-md-1 destacados">
          <div class="row d-flex flex-row justify-content-center">
            <h2 class="home col-12 text-center destacados">destacados</h2>

            @forelse ($destacados as $destacado )
              <article  class="d-none  p-2 col-md-4 destacados d-flex justify-content-center">
                <div class="row d-flex justify-content-center">
                  <div class="articulo-fondo border " style="padding: 10px;">
                    <div class="col-6 col-md-12 imagen">
                      <img class="destacados" src="{{ asset("/storage/relojes/$destacado->image") }}" alt="img-reloj">
                    </div>
                    <div class="col-6 col-md-12">
                      <h4 class="home col-12 text-center">{{$destacado->brand}}</h4>
                    </div>
                    @if ($usuario)
                      <div class="col-6 col-md-12">
                        <a  href="/carrito/agregar/{{$destacado->id}}/{{$usuario->id}}" class="home col-12 d-flex justify-content-center btn btn-primary">Agregar a carrito</a>
                      </div>
                    @endif
                  
                  </div>
                </div>
              </article>
            @empty
                <h2>No hay destacados</h2>
            @endforelse


            <div class="col-12 d-flex justify-content-around destacados-celu d-md-none">

              @forelse ($destacados as $destacado )

              <a href="#"><div class="p-2 destacados"><p class="destacados-celu"><img src="" alt=""></p></div></a>
              @empty
                <h2>No hay destacados</h2>
              @endforelse

            </div>
            <div style="width: 100%; margin-top:30px;" class="conteiner-fluid text-center">
              {{$destacados->links()}}
            </div>
          </div>
        </div>
      </section>
      <section class="row hombre-mujer">
        <a class="col-6" href="/reloj/hombres">
          <div class="row">
            <img class="col-12"src="images/hombre.jpg" alt="seccion de hombres">
          </div>
        </a>
        <a class="col-6" href="/reloj/mujeres">
          <div class="row">
            <img class="col-12"src="images/mujer.jpg" alt="seccion de mujeres">
          </div>
        </a>
      </section>
      <section class="row promociones">
        <div class="col-12 col-md-10 offset-md-1 promociones">
          <div class="row">
            <h2 class="home col-12 text-center promociones"> Proximos lanzamientos</h2>
            <div class="col-12 carrusel">
              <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="images/r1.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Badber</h5>
                        <p>Collección demujeres</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="images/r2.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Badber</h5>
                        <p>Collección de hombres</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="images/r3.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Omega</h5>
                        <p>Collección verano 2018</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="images/r4.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Longines</h5>
                        <p>Solo para ellas</p>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection
