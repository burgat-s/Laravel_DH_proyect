<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Redirect;
use App\Watch;

// use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $destacados = Watch::where("featured","on")->paginate(3);
      $vac = compact('destacados');

      return view('homer',$vac);
    }

}
