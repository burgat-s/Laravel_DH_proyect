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
      $relojes = Watch::all()->where("state"="1");
      $vac = compact('relojes');

      return view('Watches.index',$vac);
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
        $this->validate($request, [
          "brand" =>  "required|string|min:3",
          "price" => "required|numeric|min:0",
          "stock" => "required|numeric|min:0",
          "model" => "required|string|min:3",
          "description" => "required|string|min:3",
          "discount" => "required|numeric|min:0",
          "featured" =>  "string",
          "gender" => "required|string",
          "material" => "required|string",
          "band" => "required|string",
          "submersible" => "string",
          "color" => "required|string",
          "image" => "required|image",
        ]);


        $ruta = $request->file("image")->store("public/relojes");
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

        return redirect("/altaProductos");


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
    public function edit($id)
    {
    $reloj = Watch::find($id);

    return view('watches.edit', compact('reloj'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Watch  $watch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $relojEditado = Watch::find($id);

      $this->validate($request, [
        "brand" =>  "required|string|min:3",
        "price" => "required|numeric|min:0",
        "stock" => "required|numeric|min:0",
        "model" => "required|string|min:3",
        "description" => "required|string|min:3",
        "discount" => "required|numeric|min:0",
        "featured" =>  "string",
        "gender" => "required|string",
        "material" => "required|string",
        "band" => "required|string",
        "submersible" => "string",
        "color" => "required|string",
        "image" => "image",
      ]);

      if ($request->image) {
        $ruta = $request->file("image")->store("public/relojes");
        $nombreArchivo = basename($ruta);
        $relojEditado->image = $nombreArchivo;
      }

      $relojEditado->brand = $request->brand;
      $relojEditado->price = $request->price;
      $relojEditado->stock = $request->stock;
      $relojEditado->model = $request->model;
      $relojEditado->description = $request->description;
      $relojEditado->discount = $request->discount;
      $relojEditado->featured = $request->featured;
      $relojEditado->gender = $request->gender;
      $relojEditado->material = $request->material;
      $relojEditado->band = $request->band;
      $relojEditado->submersible = $request->submersible;
      $relojEditado->color = $request->color;

      $relojEditado->save();

      return redirect("/altaProductos");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Watch  $watch
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $relojDesactivado = Watch::find($id);
        $relojDesactivado->state = 0;

        $relojDesactivado->save();

      return redirect("/listarProductos");
    }
}
