@extends('plantilla')

@section('titulo')
 Login
@endsection

@section('content')

  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <!------ Include the above in your HEAD tag ---------->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

    <div id="titulologinpage" class="container-fluid ">
      <h1 id="titulologinpage" class="col-12">Iniciar seción o Registrarse</h1>
    </div>
      </div>
      <div class= "row" >
    <div class="col-md-12 col-lg-6" id=logininfo >
      <h4>Iniciar seción</h4>
      <form action="login.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
      </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="recordarme">
    <label class="form-check-label-Recordarme" for="exampleCheck1">Recordarme</label>
  </div>
  <button type="submit" class="btn btn-primary" name="iniciarSession">Iniciar seción</button>
    <p id="forgotpassword">
      <a href="">Olvido su contraseña?</a></p>
</form>
</div>
    <div class= "col-lg-5 col-md-12" id="inforegister">
<h4 id= "tituloregister"> Nuevos usuarios </h4>
<p id="inforegister">Al crear una cuenta con nuestra tienda podrás moverte más rápidamente por el proceso de pago, guardar múltiples direcciones de envío, ver y seguir el rastro de los pedidos de tu cuenta y más!! </p>
<br>
<br>
<a class="btn btn-primary" href="/registro" role="button">REGISTRARSE</a>
</div>


</div>

@endsection
