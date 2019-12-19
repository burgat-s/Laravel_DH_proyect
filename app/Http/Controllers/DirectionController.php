<?php

namespace App\Http\Controllers;

use App\Direction;
use Illuminate\Http\Request;

class DirectionController extends Controller
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
      return view('Directions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          $this->validate($request, [
            "provincia" =>  "required|string",
            "localidad" => "required|string|min:3",
            "barrio" => "required|string|min:3",
            "calle" => "required|string|min:2",
            "numero" => "numeric",
            "cp" => "numeric",

          ]);

          $newDirection = new Direction;

    
          $newDirection->provincia = $request->provincia;
          $newDirection->localidad = $request->localidad;
          $newDirection->barrio = $request->barrio;
          $newDirection->calle = $request->calle;
          $newDirection->numero = $request->numero;
          $newDirection->cp = $request->cp;
          $newDirection->user_id = $request->user_id;



          $newDirection->save();

          return redirect("/usuario");


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function show(Direction $direction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function edit(Direction $direction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Direction $direction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Direction  $direction
     * @return \Illuminate\Http\Response
     */

       public function destroy($id)
      {
          $direccionDesactivado = Direction::find($id);
          $direccionDesactivado->estado = 0;

          $direccionDesactivado->save();

        return redirect("/usuario");
      }
        //

}
