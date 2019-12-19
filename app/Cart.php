<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  protected $fillable = [
      'user_id', 'watch_id', 'quantity',
  ];



  public function usuario(){
    return $this->belongsTo("App\User", "user_id");
  }
  public function reloj(){
    return $this->belongsTo("App\Watch", "watch_id");
  }


}
