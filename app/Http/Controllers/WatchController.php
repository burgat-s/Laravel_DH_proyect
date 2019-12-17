<?php

namespace App\Http\Controllers;

use App\Watch;
use Illuminate\Http\Request;

class WatchController extends Controller
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
       return view('Watches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $ruta = $request->file("image")->store("public");
        $nombreArchivo = basename($ruta);


        $nuevoReloj = new Watch;
        $nuevoReloj->brand = $request->brand;
        $nuevoReloj->price = $request->price;
        $nuevoReloj->stock = $request->stock;
        $nuevoReloj->model = $request->model;
        $nuevoReloj->description = $request->description;
        $nuevoReloj->discount = $request->discount;
        $nuevoReloj->featured = $request->featured;
    
        $nuevoReloj->gender = $request->gender;
        $nuevoReloj->material = $request->material;
        $nuevoReloj->band = $request->band;
        $nuevoReloj->submersible = $request->submersible;
        $nuevoReloj->color = $request->color;
        $nuevoReloj->image = $nombreArchivo;

        $nuevoReloj->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Watch  $watch
     * @return \Illuminate\Http\Response
     */
    public function show(Watch $watch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Watch  $watch
     * @return \Illuminate\Http\Response
     */
    public function edit(Watch $watch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Watch  $watch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Watch $watch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Watch  $watch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Watch $watch)
    {
        //
    }
}
