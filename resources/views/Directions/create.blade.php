@extends('plantilla')

@section('titulo')
  Cerga Dirección
@endsection

@section('content')

  @php
  use App\User;

  $usuario = Auth::user() ;

  @endphp

  <div class="container-fluid  row tab-content">
    <div style="margin-left: 15%;
    width:80%;" class="col-8  align-self-center  " id="home" >
      <form class="list datos" action="/direccion/create" method="post">
        @csrf
        {{-- APIIIII --}}
        <label  class="" for="provincia">Seleccione la Provincia:</label>

        <select id="provincias" class="form-control form-control-sm" name="provincia">

        </select>

        <label class="" for="localidad">Localidad:</label>
        <input class="form-control form-control-sm" type="text" name="localidad" value="{{old('localidad')}}">
          <span style="color:red;">{{$errors->first('localidad')}}</span>

        <label class="" for="barrio">Barrio:</label>
        <input class="form-control form-control-sm" type="text" name="barrio" value="{{old('barrio')}}">
          <span style="color:red;">{{$errors->first('barrio')}}</span>

        <label class="" for="calle">Calle:</label>
        <input class="form-control form-control-sm" type="text" name="calle" value="{{old('calle')}}">
          <span style="color:red;">{{$errors->first('calle')}}</span>

        <label class="" for="numero">Número</label>
        <input class="form-control form-control-sm" type="text" name="numero" value="{{old('numero')}}">
          <span style="color:red;">{{$errors->first('numero')}}</span>

        <label class="" for="cp">Código Postal</label>
        <input class="form-control form-control-sm" type="text" name="cp" value="{{old('cp')}}">
          <span style="color:red;">{{$errors->first('cp')}}</span>

        <input class="btn btn-success" style="margin:5px;" type="submit" value="Cargar Dirección" name="submit">

        <input type="hidden" name="user_id" value="{{$usuario->id}}">


      </form>

  </div>
</div>

<script type="text/javascript" src="{{ asset('/js/Directions/provincias.js') }}"></script>



@endsection
