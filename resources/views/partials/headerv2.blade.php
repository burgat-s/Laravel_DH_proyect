
<header>
  @php
  use App\User;

  $usuario = Auth::user() ;

  @endphp

    <div class="row header container-fluid">
      <div class="d-none d-md-inline-block col-md-2 logo">
        <a href="/home" class="logo">  <img id="logo" src="/images/logo-sin-fondo.png" alt=""></a>
      </div>
      <div class="col-6">
        <h1 class="titulo"> Relojes DTS</h1>
      </div>
      <div class="row col-4 media-header">
        <div class="d-none d-md-inline-block col-md-12">
          <h2 style="text-transform: capitalize" class="usuario"> @if (Route::has('login')) @auth Bienvenido  {{$usuario->name}} !!   <a href="/logout"> Desloguarse </a><img style=" height:50px; " src="/storage/{{$usuario->avatar }}" alt="avatar"> @else  Esta navegando como invitado!! @endauth  @endif </h2>
          @if (Route::has('login')) @auth @else
            <h2  class="usuario">  <a href="{{ route('login') }}"> Logueate! </a> </h2>
          @endauth  @endif
        </div>
        <div class=" col-md-12 naver text-right titulo">
          <nav>
            @if (Route::has('login')) @auth
              <a  @if (Route::has('login')) @auth href="/usuario"  @else  href="{{ route('login') }}" @endauth  @endif> <img href="#" src="/images/usuario.png" alt="USER"></a>
              <a href="/carro"> <img href="#" src="/images/carrito.png" alt="CART"></a>
              <a href="/relojes"> <img href="#" src="/images/buscar.png" alt="SERCH"></a>
              @if ($usuario->user_tipe==1)
                <a href="/altaProductos"> <img href="#" src="/images/up.png" alt="SERCH"></a>
                {{-- <a href="/editarProductos"> <img href="#" src="/images/editar.png" alt="SERCH"></a> --}}
                <a href="/listarProductos"> <img style="Display: inline-block;" href="#" src="/images/editar.png" alt="SERCH"> </a>
              @endif

            @endauth  @endif

          </nav>
        </div>


      </div>
    </div>
</header>
