<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administracija extends Model
{
  protected $fillable = ['ime'];

  public function nalog(){
    return  $this->hasMany('App\Nalog');
  }

}
