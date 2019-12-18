<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;
use Redirect;

class UsuarioEliminado
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      $usuario = Auth::user() ;
      if ($usuario) {
        if ($usuario->state!=1) {
          Auth::logout();
          Session::flush();
          return Redirect::to('/login');
        }
      }

        return $next($request);
    }
}
