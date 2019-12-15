@extends('plantilla')

@section('titulo')
  Seleccion de relojes
@endsection


@section('content')
    <div class="container-fluid">
      <h2 class="home col-12 text-center ">Carga de productos</h2>
      <form class="" action="alta-de.-productos.php" method="post">
        <div class="col-12 col-md-6">
          <div class="row">
            <div class="col-10 offset-1 a">
              <label class="col-12" for="img.prod">Seleccione la imagen del reloj</label>
              <input type="file" name="img.prod" placeholder="Ingrese su avatar" value="">
              <label class="col-12" for="img.prod">Seleccione la marca del reloj</label>
              <select class="col-6" name="marca">
                <option value="">Marca</option>
                <option value="Tommy Hilfiger">Tommy Hilfiger</option>
                <option value="Hugo Boss">Hugo Boss</option>
                <option value="Tissot">Tissot</option>
              </select>
              <label class="col-12" for="Modelo">Modelo:</label>
              <input class="col-12" type="text" name="Modelo" value="" placeholder="Modelo del reloj" >
              <label class="col-12" for="Precio">Precio:</label>
              <span class="col-1">$</span>
              <input class="col-8" type="number" min="0" step="any"  name="Precio" value="0">
              <label class="col-12" for="Precio">Stock:</label>

              <input class="col-8" type="number" min="0" step="any"  name="Stock" value="0">

              <label class="col-12"  for="genero">Seleccione el genero del reloj.</label>
              <select class="col-6" name="genero">
                <option value="">Genero</option>
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
              </select>
              <label class="col-12" for="Descuento">Descuento</label>
              <select class="" name="garantia">
                <?php $x=0; while($x<=100){ ?>
                <option value=""><?php echo $x;?></option>
                <?php $x=$x+5;}  ?>
              </select>
              <label class="col-11 inline-block" for="Atm">Promosionado?</label>
              <input class="col-1 inline-block" type="checkbox" name="featured">
            </div>

          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="row">
            <div class="col-10 offset-1 b">
              <label class="col-12" for="Material-caja">Seleccione el material de la caja</label>
              <select class="col-6" name="Material-caja">
                <option value="">Caja</option>
                <option value="inox">Acero inoxidable</option>
                <option value="Plastico">Plastico</option>
                <option value="Acrilico">Acrilico</option>
                <option value="Titanio">Titanio</option>
              </select>
              <label class="col-12" for="Material-correa">Seleccione el material de la correa</label>
              <select class="col-6" name="Material-correa">
                <option value="">Correa</option>
                <option value="inox">Acero inoxidable</option>
                <option value="cau">Caucho</option>
                <option value="c-m">Cuero marron</option>
                <option value="c-n">Cuero negro</option>
                <option value="c-m">Cuero Blanco</option>
              </select>
              <label class="col-11 inline-block" for="Atm">Sumergible?</label>
              <input class="col-1 inline-block" type="checkbox" name="sumersible">
              <label class="col-12" for="color">Seleccione el color predominante</label>
              <select class="col-6" name="Material-correa">
                <option value=""></option>
                <option value="black">negro</option>
                <option value="red">rojo</option>
                <option value="orange">naranja</option>
                <option value="pink">rosa</option>
                <option value="yellow">amarillo</option>
                <option value="blue">azul</option>
                <option value="violet">violeta</option>
                <option value="silver">plateado</option>
                <option value="golden">dorado</option>
                <option value="green">verde</option>
              </select>
              <label class="col-12" for="descripcion">Incluya una descripción del producto</label>
              <textarea name="descripcion" rows="8" cols="80" name="desc" placeholder="Incluye una desripcion del reloj"></textarea>

            </div>

          </div>
        </div>
        <input class="btn btn-primary col-4 offset-4" type="submit" value="Cargar producto" name="submit" style="margin-bottom:50px">
      </form>
    </div>
  @endsection