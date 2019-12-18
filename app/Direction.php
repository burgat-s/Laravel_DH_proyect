<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{

  protected $fillable = [
      'provincia', 'localidad', 'barrio', 'calle','numero','cp','user_id',
  ];





  public function userdirection(){
    return $this->belongsTo("App\User", "User_id");
  }
}
