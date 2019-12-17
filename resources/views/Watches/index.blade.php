@extends('plantilla')

@section('titulo')
  Seleccion de relojes
@endsection


@section('content')


<div class="container-fluid relojes">
@php $total=0;  @endphp

@forelse ($relojes as $reloj)

  @if ($reloj->state==1)
    <div class="card" style="width: 80%;">

      <div class="card-body">
        <img style="width:150px; height:150px;" src="storage/relojes/{{$reloj->image}}" class="card-img-top" alt="...">
        <span></span>
        <a class="btn btn-warning" href="/editarProductos/{{$reloj->id}}" role="button">Editar</a>
        <a class="btn btn-danger" method="post" href="/eliminarProductos/{{$reloj->id}}" role="button">Borrar</a>
      </div>
    </div>
    @php $total= $total + 1;  @endphp

  @endif

@empty
@endforelse

@if ($total==0)
  @php redirect("/altaProductos");   @endphp
@endif


</div>

@endsection
