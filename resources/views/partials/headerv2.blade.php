@php
use App\User;
$usuario = Auth::user() ;
@endphp
<header>
    <div class="row header container-fluid">
      <div class="col-12 nuevo-header " style="width:100%; padding:5px !important">
        <div class="" style="display:inline-block; float:left">
          <a href="/home" class="">  <img style="padding: 10px;margin:3px; width:200px" src="/images/clock-logo-b.png" alt=""></a>
        </div>

        <div class=""style="display:inline-block; float:Right ; color:white">
          <nav class="nitro">
            <ul >

              <li id="navlink"> <a  href="/relojes" ><img href="#" src="/images/buscar.png" alt="SERCH"><p> Buscar </p></a>  </li>
              @if (Route::has('login')) @auth
              <li id="navlink"> <a  href="/carro" ><img href="#" src="/images/carrito.png" alt="CART"><p> Carrito </p></a>  </li>
              <li id="navlink"> <a  href="/usuario" ><img href="#" src="/images/usuario.png" alt="USER"> <p> Mi Cuenta </p></a>  </li>
              @if ($usuario->user_tipe==1)
              <li id="navlink"> <a  href="/listarProductos" ><img style="Display: inline-block;" href="#" src="/images/editar.png" alt="SERCH"><p> Administrador </p></a>  </li>
              @endif
              <li id="navlink"> <a  href="/logout" ><p> Logout </p></a>  </li>
              @else
              <li id="navlink"> <a  href="{{ route('login') }}" ><p> Login </p></a>  </li>
              @endauth  @endif

            </ul>
          </nav>
        </div>
      </div>
</header>
