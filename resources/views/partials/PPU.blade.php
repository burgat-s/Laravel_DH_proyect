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
    <a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab">Metodos de Pago</a>
    <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">Modificar Preguntas Frecuentes</a>
    <a class="list-group-item list-group-item-action" data-toggle="list" href="#settings" role="tab">Eliminar cuenta</a>
  </div>

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active" id="home" role="tabpanel"><ul class="list datos">
  <li class="list-group-item">Usuario</li>
  <li class="list-group-item">Nombres</li>
  <li class="list-group-item">Apellidos</li>
  <li class="list-group-item">Mail</li>
</ul></div>
    <div class="tab-pane" id="profile" role="tabpanel">...</div>
    <div class="tab-pane" id="messages" role="tabpanel">...</div>
    <div class="tab-pane" id="settings" role="tabpanel">...</div>
  </div>
@endsection
