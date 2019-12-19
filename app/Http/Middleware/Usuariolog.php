<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;
class Usuariolog
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
        // dd($usuario);
        if ($usuario) {
          return $next($request);
        }
         return redirect('/');

    }
}
