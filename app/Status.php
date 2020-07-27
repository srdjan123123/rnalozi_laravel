<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['status'];

    public function nalogs(){
      return  $this->hasMany('App\Nalog','status');
    }
}
