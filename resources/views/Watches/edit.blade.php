@extends('layouts.app')

@section('titulo')
  Carga de relojes
@endsection


@section('content')

  @php
  $rutaimagen =  "relojes"."/".$reloj->image;


  @endphp
<div class="container-fluid">
  <h2 class="home col-12 text-center ">Modificar Reloj</h2>
  <form class="" action="/editarProductos/{{$reloj->id}}" method="post" enctype="multipart/form-data">
      @csrf

    <div class="col-12 col-md-6">
      <div class="row">
        <div class="col-10 offset-1 a">
          <div class="text-center">
            <img style="width:150px;height: 150px;" src="{{ asset("storage/$rutaimagen") }}" alt="hellow">
          </div>
          <label class="col-12" for="image">Seleccione la imagen del reloj</label>
          <input type="file" name="image" placeholder="Ingrese su avatar"   value="" >
          <span style="color:red;">{{$errors->first('image')}}</span>

          <label class="col-12" for="brand">Seleccione la marca del reloj</label>
          <select class="col-6" name="brand"  value="{{$reloj->brand}}" >
            <option value="">Marca</option>
            <option @if ($reloj->brand == "Tommy-Hilfiger") selected @endif value="Tommy-Hilfiger">Tommy Hilfiger</option>
            <option @if ($reloj->brand == "Hugo-Boss") selected @endif value="Hugo-Boss">Hugo Boss</option>
            <option @if ($reloj->brand == "Tissot" ) selected @endif value="Tissot">Tissot</option>
          </select>
          <span style="color:red;">{{$errors->first('brand')}}</span>

          <label class="col-12" for="model">Modelo:</label>
          <input class="col-12" type="text" name="model"  placeholder="Modelo del reloj" value="{{$reloj->model}}">
          <span style="color:red;">{{$errors->first('model')}}</span>

          <label class="col-12" for="price">Precio:</label>
          <span class="col-1">$</span>
          <input class="col-8" type="number" min="0" step="any"  name="price"   value="{{$reloj->price}}" >
          <span style="color:red;">{{$errors->first('price')}}</span>

          <label class="col-12" for="stock">Stock:</label>
          <input class="col-8" type="number" min="0" step="any"  name="stock"  value="{{$reloj->stock}}" >
          <span style="color:red;">{{$errors->first('stock')}}</span>

          <label class="col-12"  for="gender">Seleccione el genero del reloj.</label>
          <select class="col-6" name="gender"  value="{{$reloj->gender}}" >
            <option value="">Genero</option>
            <option @if ($reloj->gender == "M") selected @endif value="M">Hombre</option>
            <option @if ($reloj->gender == "W") selected @endif value="W">Mujer</option>
          </select>
          <span style="color:red;">{{$errors->first('gender')}}</span>

          <label class="col-12" for="discount">Descuento</label>
          <select class="" name="discount"  value="{{$reloj->discount}}" >
            <?php $x=0; while($x<=100){ ?>
            <option @if ($reloj->discount == $x) selected @endif value="{{$x}}"><?php echo $x;?></option>
            <?php $x=$x+5;}  ?>
          </select>
          <span style="color:red;">{{$errors->first('discount')}}</span>

          <label class="col-11 inline-block" for="featured">Promosionado?</label>
          <input class="col-1 inline-block" type="checkbox"  name="featured" @if ($reloj->featured) checked @endif   >
          <span style="color:red;">{{$errors->first('featured')}}</span>

        </div>

      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="row">
        <div class="col-10 offset-1 b">
          <label class="col-12" for="material">Seleccione el material de la caja</label>
          <select class="col-6" name="material"  value="{{$reloj->material}}" >
            <option value="">Caja</option>
            <option  @if ($reloj->material == "inox") selected @endif value="inox">Acero inoxidable</option>
            <option  @if ($reloj->material == "Plastico") selected @endif value="Plastico">Plastico</option>
            <option  @if ($reloj->material == "Acrilico") selected @endif value="Acrilico">Acrilico</option>
            <option  @if ($reloj->material == "Titanio") selected @endif value="Titanio">Titanio</option>
          </select>
          <span style="color:red;">{{$errors->first('material')}}</span>

          <label class="col-12" for="band">Seleccione el material de la correa</label>
          <select class="col-6" name="band"  value="{{$reloj->band}}" >
            <option value="">Correa</option>
            <option @if ($reloj->band == "inox") selected @endif value="inox">Acero inoxidable</option>
            <option @if ($reloj->band == "cau") selected @endif value="cau">Caucho</option>
            <option @if ($reloj->band == "c-m") selected @endif value="c-m">Cuero marron</option>
            <option @if ($reloj->band == "c-n") selected @endif value="c-n">Cuero negro</option>
            <option @if ($reloj->band == "c-m") selected @endif value="c-m">Cuero Blanco</option>
          </select>
          <span style="color:red;">{{$errors->first('band')}}</span>

          <label class="col-11 inline-block" for="submersible">Sumergible?</label>
          <input class="col-1 inline-block" type="checkbox"  name="submersible" @if ($reloj->submersible) checked @endif value="{{$reloj->submersible}}">
          <span style="color:red;">{{$errors->first('submersible')}}</span>

          <label class="col-12" for="color">Seleccione el color predominante</label>
          <select class="col-6" name="color"  value="{{$reloj->color}}" >
            <option value=""></option>
            <option @if ($reloj->color == "black") selected @endif value="black">negro</option>
            <option @if ($reloj->color == "red") selected @endif value="red">rojo</option>
            <option @if ($reloj->color == "orange") selected @endif value="orange">naranja</option>
            <option @if ($reloj->color == "pink") selected @endif value="pink">rosa</option>
            <option @if ($reloj->color == "yellow") selected @endif value="yellow">amarillo</option>
            <option @if ($reloj->color == "blue") selected @endif value="blue">azul</option>
            <option @if ($reloj->color == "violet") selected @endif value="violet">violeta</option>
            <option @if ($reloj->color == "silver") selected @endif value="silver">plateado</option>
            <option @if ($reloj->color == "golden") selected @endif value="golden">dorado</option>
            <option @if ($reloj->color == "green") selected @endif value="green">verde</option>
          </select>
          <span style="color:red;">{{$errors->first('color')}}</span>

          <label class="col-12"  for="description">Incluya una descripción del producto</label>
          <textarea name="description" rows="8" cols="80" style="width:100%;" name="description" placeholder="Incluye una desripcion del reloj"> @if ($reloj->description)  {{$reloj->description}}   @endif</textarea>
          <span style="color:red;">{{$errors->first('description')}}</span>

        </div>

      </div>
    </div>
    <input class="btn btn-primary col-4 offset-4" type="submit" value="Editar producto" name="submit" style="margin-bottom:50px">
  </form>
</div>
@endsection
