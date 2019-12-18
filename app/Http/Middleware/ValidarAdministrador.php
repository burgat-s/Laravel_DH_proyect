<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
// use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;




class ValidarAdministrador
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
      if ($usuario->user_tipe!=1) {
       return redirect('/');
      }
        return $next($request);
    }
}
