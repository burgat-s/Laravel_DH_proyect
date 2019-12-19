<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{

  protected $fillable = [
      'brand', 'price', 'stock', 'model','description','discount','featured','gender','material', 'band', 'submersible', 'color', 'image'
  ];

  public function carrito(){
    return $this->belongsToMany("App\Cart", "cart_id");
  }

  public function usuarios(){
    return $this->belongsToMany("App\User","carts", "user_id" , "watch_id");
  }

  public function carro(){
    return $this->hasMany("App\Cart", "watch_id");
  }


  public function search($id)
  {
      $reloj = Watch::where('id','=',"$id")->get();

    return $reloj;
  }
}
