@extends('plantilla')

@section('titulo')
 Registro
@endsection

@section('content')



  <head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <!--- Include the above in your HEAD tag ---------->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

    <div class="inforegiter container-fluid ">
      <h1 id= "tituloregister2">Crear una cuenta</h1>
      <p class="back-link">
        <a href="/login">Volver</a>
      </p>
      <p class=lead>Porfavor ingresar todos los datos requeridos.</p>
    </div>
    <div class=" listregister row">
      <form class= "col-12 col-lg-6" action="register.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Nombres</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombres" name="nombre" value="" >
          <span class="invalido"></span>
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput2" class="col-sm-2 col-form-lable">Apellidos</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Apellidos" name="apellido" value="">
          <span class="invalido"></span>
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput3" class="col-sm-2 col-form-lable">Email</label>
          <input type="email" class="form-control" id="formGroupExampleInput3" placeholder="Email" name="email" value="">
          <span class="invalido"></span>
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput4" class="col-sm-2 col-form-lable">Nombre de Usuario</label>
          <input type="username" class="form-control" id="formGroupExampleInput4" placeholder="Nombre de Usuario" name="username"value="">
          <span class="invalido"></span>
        </div>

        <input type="file" name="avatar" placeholder="Ingrese su avatar">


        <div class="form-group">
          <label for="formGroupExampleInput5" class="col-sm-2 col-form-lable">Contraseña</label>
          <input type="password" class="form-control" id="formGroupExampleInput5" placeholder="Password" name="password" >
                    <span class="invalido"></span>
                              <p class="col-12 aviso">La contraseña debe tener una longitud mayor a 6 caracteres y menor a 16. Debe contener mayusculas,minusculas y al menos un número.</p>
                  </div>

        <div class="form-group">
          <label for="formGroupExampleInput6" class="col-4 col-form-lable">Confirmar Contraseña</label>
          <input type="password" class="form-control" id="formGroupExampleInput6" placeholder="Confirm Password" name="passwordConfirm">
                    <span class="invalido"></span>
                  </div>

        <div class="form-group">
          <label for="formGroupExampleInput7" class="col-4 col-form-lable">Recordarme</label>
          <input type="checkbox" class="form-control" id="formGroupExampleInput7" value="recordar" name="recordarme"  >
          <br>
        <input class="btn btn-primary" type="submit" value="Registrarme" name="Registrarme">

        </div>

      </form>

    </div>
@endsection
