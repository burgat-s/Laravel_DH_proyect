{{-- @extends('plantilla') --}}

{{-- @section('header') --}}
<head>

<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<header class="header">
  <div class="header-inner">
    <div class="container">
      <div class="row">

        <div class="col-sm-6 col-md-3 ">
          <a class="header-logo" href="/home">
          <img class="img-responsive" src="images/logo-sin-fondo.png" style="width:100px;" alt="">
          </a>
          <div class="empty-space xs-25 sm-25"></div>
        </div>

        <div class="col-sm-6 col-md-5 header-2">
            <ul class="header-list">
            <li><a href="#">Relojes</a></li>
            <li><a href="#">Promociones</a></li>
            <li><a href="#">Tiendas</a></li>
          </ul>
          <div class="empty-space xs-25 sm-25"></div>
        </div>

        <div class="col-xs-12 col-md-4 col-sm-6">
          <div class="marg-sm-b30"></div>
          <div class="empty-space marg-lg-b20"></div>
          <div class="empty-space marg-lg-b15"></div>

          <!-- T-USER -->
          <h3 class="saludo"style='text-decoration:none;color:Orange;'></h3></li>
          <ul class="tt-user">
            <li><a href="/login"><i class="fa fa-user" aria-hidden="true"></i></a></li>
            <li><a href="/carro"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
          </ul>

          <div class="empty-space marg-lg-b30"></div>
          <!-- TT-buscar -->
          <form method="post">
            <div class="tt-buscar">
              <input type="text" required="" placeholder="Buscar...">
              <div class="tt-buscar-submit">
                <i class="fa fa-search" aria-hidden="true"></i>
                <input type="submit" value="">
              </div>
            </div>
          </form>

          </div>
      </div>

    </div>
  </div>
</header>
{{-- @endsection --}}
