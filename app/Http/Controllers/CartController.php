<?php

namespace App\Http\Controllers;

use App\User;
use App\Watch;
use App\Cart;
use Illuminate\Http\Request;
use auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($idReloj, $idUsuario)
      {
      $nuevoItem = new Cart;

      $reloj = Watch::find($idReloj);
      $usuario = User::find($idUsuario);


      $nuevoItem->user_id = "$usuario->id";
      $nuevoItem->watch_id = "$reloj->id";
      $nuevoItem->quantity = 1;

      $nuevoItem->save();

      return redirect("/relojes");


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
      $usuario1 = Auth::user() ;
      $carts = Cart::where('user_id','=',"$usuario1->id")->get();
      $vac = compact('carts');


      return view('Carts.carro',$vac);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update( )
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }

    public function borraritem($id)
    {
        $cart = Cart::where('watch_id','=',"$id")->delete();

            return redirect("/carro");

    }
}
