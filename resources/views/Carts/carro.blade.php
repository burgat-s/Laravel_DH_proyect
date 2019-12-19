@extends('plantilla')
@section('titulo')
 Carrito
@endsection
@section('content')
<div class="">
    <div class="px-4 px-lg-0">

@php
use App\Watch;
use App\User;

$total=0;
@endphp


  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Reloj</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Precio</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Cantidad</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Descuento</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Eliminar</div>
                  </th>
                </tr>
              </thead>
@forelse ($carts as $cart)
@php
  $fantasia = new Watch ();
  $reloj = $fantasia->search("$cart->watch_id");
  // dd($reloj[0]->brand)
  $total= $total + ( ($reloj[0]->price) * ($reloj[0]->discount != 0 ? $reloj[0]->discount/100 : 1) * ($cart->quantity));




  $usuario = Auth::user() ;

@endphp

  <tbody>
    <tr>
      <th scope="row" class="border-0">
        <div class="p-2">
          <img src="/storage/relojes/{{$reloj[0]->image}}" alt="" width="70" class="img-fluid rounded shadow-sm">
          <div class="ml-3 d-inline-block align-middle">
            <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Marca:{{$reloj[0]->brand}}</a></h5><span class="text-muted font-weight-normal font-italic d-block">Modelo: {{$reloj[0]->model}}</span>
          </div>
        </div>
      </th>
      <td class="border-0 align-middle"><strong>${{$reloj[0]->price}}</strong></td>
      <td class="border-0 align-middle">
        <a  href="/carrito/agregarcarrito/{{$reloj[0]->id}}/{{$usuario->id}}" style="margin:8px; "  type="button" class=" inline-block center-block d-inline p-2 bg-warning text-white">+</a>

        <strong>{{$cart->quantity}}</strong>

        <a href="/carrito/sacarcarrito/{{$reloj[0]->id}}/{{$usuario->id}}" style="margin:8px; "  type="button" class=" inline-block center-block d-inline p-2 bg-warning text-white">-</a>
      </td>
      <td class="border-0 align-middle"><strong>{{$reloj[0]->discount}}%</strong></td>
      <td class="border-0 align-middle"><a href="/carro/removerItem/{{$reloj[0]->id}}" class="text-dark"><i class="fa fa-trash"></i></a></td>
    </tr>
    <tr>
  </tbody>


@empty
  <h3>No Hay Productos en el carrito !!</h3>
@endforelse




            </table>
          </div>
          <!-- End -->
        </div>
      </div>

      <div class="row py-5 p-4 bg-white rounded shadow-sm">
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3  font-weight-bold tenkiuu">Gracias por confiar en nosotros!!</div>
        </div>
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Resumen de compra </div>
          <div class="p-4">
            <p class="font-italic mb-4">Recuerda, los envios de nuestros relojes son gratuitos !!! </p>
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                <h5 class="font-weight-bold">$ {{$total}}</h5>
              </li>
            </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Comprar</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
  </div>



{{-- </div> --}}
@endsection
