@extends('plantilla')

@section('titulo')
 Relojes DTS
@endsection

@section('content')


    <div class="container-fluid">
      <section class="row destacados">
        <div class="col-12 col-md-10 offset-md-1 destacados">
          <div class="row">
            <h2 class="home col-12 text-center destacados">destacados</h2>
            <article class="d-none d-md-inline-block col-md-4 destacados">
              <a href="#">
              <div class="row">
                <div class="articulo-fondo border">
                  <div class="col-6 col-md-12 imagen">
                    <img class="destacados" src="images/img-auxiliar1.webp" alt="img-reloj">
                  </div>
                  <div class="col-6 col-md-12">
                    <h4 class="home col-12 text-center">TISSOT</h4>
                  </div>
                </div>
              </div>
              </a>
            </article>
            <article class="d-none d-md-inline-block col-md-4 destacados">
              <a href="#">
              <div class="row">
                <div class="articulo-fondo border">
                  <div class="col-6 col-md-12 imagen">
                    <img class="destacados" src="images/img-auxiliar.webp" alt="img-reloj">
                  </div>
                  <div class="col-6 col-md-12">
                    <h4 class="home col-12 text-center">TOMMY</h4>
                  </div>
                </div>
              </div>
              </a>
            </article>
            <article class="d-none d-md-inline-block col-md-4 destacados">
              <a href="#">
              <div class="row">
                <div class="articulo-fondo border">
                  <div class="col-6 col-md-12 imagen">
                    <img class="destacados" src="images/img-auxiliar2.webp" alt="img-reloj">
                  </div>
                  <div class="col-6 col-md-12">
                    <h4 class="home col-12 text-center">BOSS</h4>
                  </div>
                </div>
              </div>
              </a>
            </article>
            <div class="col-12 d-flex justify-content-around destacados-celu d-md-none">
              <a href="#"><div class="p-2 destacados"><p class="destacados-celu">TISSOT</p></div></a>
              <a href="#"><div class="p-2 destacados"><p class="destacados-celu">TOMMY</p></div></a>
              <a href="#"><div class="p-2 destacados"><p class="destacados-celu">BOSS</p></div></a>
            </div>
          </div>
        </div>
      </section>
      <section class="row hombre-mujer">
        <a class="col-6" href="#">
          <div class="row">
            <img class="col-12"src="images/hombre.jpg" alt="seccion de hombres">
          </div>
        </a>
        <a class="col-6" href="#">
          <div class="row">
            <img class="col-12"src="images/mujer.jpg" alt="seccion de mujeres">
          </div>
        </a>
      </section>
      <section class="row promociones">
        <div class="col-12 col-md-10 offset-md-1 promociones">
          <div class="row">
            <h2 class="home col-12 text-center promociones"> promociones</h2>
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
