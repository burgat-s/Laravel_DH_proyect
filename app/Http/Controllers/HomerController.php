<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Watch;

class HomerController extends Controller
{
    public function destacados()
    {
        $destacados = Watch::where("featured","on")->paginate(3);
        $vac = compact('destacados');

        return view('homer',$vac);
    }
}
