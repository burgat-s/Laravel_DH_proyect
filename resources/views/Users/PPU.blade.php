@extends('plantilla')

@section('titulo')
  Usuario
@endsection

@section('content')

  @php
  use App\User;

  $usuario = Auth::user() ;

  @endphp


      <!-- List group -->
  <div class="list-group" id="myList" role="tablist">
    <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab">Datos Personales</a>
    <a class="list-group-item list-group-item-action" data-toggle="list" href="#direccion" role="tab">Direcciones</a>
    <a class="list-group-item list-group-item-action" data-toggle="list" href="#eliminar_cuenta" role="tab">Eliminar cuenta</a>
  </div>

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active" id="home" role="tabpanel">
      <ul class="list datos">
        <li class="list-group-item">Avatar:  <span> {{$usuario->user_name}}</span></li>
        <li class="list-group-item">Usuario:  <span> {{$usuario->user_name}} </span></li>
        <li class="list-group-item">Nombre:  <span> {{$usuario->name}} </span></li>
        <li class="list-group-item">Apellido:  <span> {{$usuario->surname}} </span></li>
        <li class="list-group-item">Mail:  <span> {{$usuario->email}} </span></li>
      </ul>

    <a href="/usuario/edit" style="margin:8px; "  type="button" class=" inline-block center-block d-inline p-2 bg-warning text-white">Editar Usuario</a>

    </div>



    <div class="tab-pane" id="direccion" role="tabpanel">

      @forelse ($usuario->direcciones as $direccion)
        @if ($direccion->estado!=0)
          <ul class="list datos">
            <li class="list-group-item">Provincia: {{$direccion->provincia}}</li>
            <li class="list-group-item">Localidad: {{$direccion->localidad}}</li>
            <li class="list-group-item">Barrio: {{$direccion->barrio}}</li>
            <li class="list-group-item">Calle: {{$direccion->calle}}</li>
            <li class="list-group-item">Numero: {{$direccion->numero}}</li>
            <li class="list-group-item">Codigo Postal: {{$direccion->cp}}</li>
            <li class="list-group-item"><a href="/direccion/destroy/{{$direccion->id}}" style="margin:8px; "  type="button" class=" inline-block center-block d-inline p-2 bg-primary text-white">Eliminar Dirección</a></li>

          </ul>
        @endif



      @empty
          <h3>No tiene direcciones cargadas :( </h3>
      @endforelse





      <a href="/direccion/create" style="margin:8px; "  type="button" class=" inline-block center-block d-inline p-2 bg-primary text-white">Cargar Dirección</a>
    </div>



    <div class="tab-pane" id="eliminar_cuenta" role="tabpanel">
      <a href="/usuario/destroy/{{$usuario->id}}"  type="button" class=" border-danger m-5 btn btn-outline-danger">Eliminar cuenta</a>
    </div>
  </div>
@endsection
