@extends('plantilla')

@section('titulo')
  Usuario
@endsection

@section('content')
      <div class="">
        <h1>Bienvenido Usuario</h1>
      </div>
      <!-- List group -->
  <div class="list-group" id="myList" role="tablist">
    <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab">Datos Personales</a>
    <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">Direcciones</a>
    <a class="list-group-item list-group-item-action" data-toggle="list" href="#settings" role="tab">Eliminar cuenta</a>
  </div>

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active" id="home" role="tabpanel">
      <ul class="list datos">
        <li class="list-group-item">Usuario</li>
        <li class="list-group-item">Nombres</li>
        <li class="list-group-item">Apellidos</li>
        <li class="list-group-item">Mail</li>
      </ul>
    </div>
    <div class="tab-pane" id="profile" role="tabpanel">
      <ul class="list datos">
        <li class="list-group-item">Usuario</li>

      </ul>
    </div>
    <div class="tab-pane" id="messages" role="tabpanel">
      <ul class="list datos">

        <li class="list-group-item">Direcciones</li>

      </ul>
    </div>
    <div class="tab-pane" id="settings" role="tabpanel">
      <button type="button" class=" center-block border-danger m-5 btn btn-outline-danger">Eliminar cuenta</button>
    </div>
  </div>
@endsection
