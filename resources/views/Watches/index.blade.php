@extends('plantilla')

@section('titulo')
  Seleccion de relojes
@endsection


@section('content')



<div class="container-fluid relojes">


@forelse ($relojes as $reloj)

  @if ($reloj->state==1)
    <div class="card" style="width: 80%;">

      <div class="card-body">
        <img style="width:150px; height:150px;" src="storage/relojes/{{$reloj->image}}" class="card-img-top" alt="...">
        <div class="d-inline">
          <a class="btn btn-warning" href="/editarProductos/{{$reloj->id}}" role="button">Editar</a>
          <a class="btn btn-danger" method="post" href="/eliminarProductos/{{$reloj->id}}" role="button">Borrar</a>
            <div style="margin:3px" class="d-inline p-2 bg-primary text-white"> <span> Marca: </span> <span>{{$reloj->brand}}</span> </div>
            <div style="margin:3px" class="d-inline p-2 bg-primary text-white"> <span> Modelo: </span> <span>{{$reloj->model}}</span> </div>
            <div style="margin:3px" class="d-inline p-2 bg-primary text-white"> <span> Precio: </span> <span>${{$reloj->price}}</span> </div>
            <div style="margin:3px" class="d-inline p-2 bg-primary text-white"> <span> Stock: </span> <span>{{$reloj->stock}}</span> </div>
            <div style="margin:3px" class="d-inline p-2 bg-primary text-white"> <span> Descuento: </span> <span>{{$reloj->discount}}</span> </div>
            <div style="margin:10px" class="d-inline p-2 bg-primary text-white"> <span> Promicionado: </span> <span>@if ($reloj->featured) si @else  no @endif</span> </div>
        </div>
      </div>
    </div>


  @endif

@empty
<a class="btn btn-primary " style="margin-top:100px;margin-bottom:300px;" href="/altaProductos"> <h3>No hay Relojes Activos ... Agregue 1!</h3></a>;
@endforelse
<div style="width: 100%;" class="conteiner-fluid text-center">
  {{$relojes->links()}}
</div>


</div>

@endsection
