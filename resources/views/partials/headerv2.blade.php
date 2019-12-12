
<header>
    <div class="row header container-fluid">
      <div class="d-none d-md-inline-block col-md-2 logo">
        <a href="/home" class="logo">  <img id="logo" src="/images/logo-sin-fondo.png" alt=""></a>
      </div>
      <div class="col-6">
        <h1 class="titulo"> Relojes DTS</h1>
      </div>
      <div class="row col-4 media-header">
        <div class="d-none d-md-inline-block col-md-12">
          <h2 class="usuario"> @if (Route::has('login')) @auth Estas logueado!  :) -  <a href="/logout"> Desloguarse </a> @else  Esta navegando como invitado!! @endauth  @endif </h2>
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
              <a href="/altaProductos"> <img href="#" src="/images/up.png" alt="SERCH"></a>
              <a href="#"> <img href="#" src="/images/down.png" alt="SERCH"></a>
            @endauth  @endif

          </nav>
        </div>


      </div>
    </div>
</header>
