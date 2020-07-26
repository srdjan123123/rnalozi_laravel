<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kupac extends Model
{
    protected $fillable = ['kupac'];

    public function nalog(){
        return $this->hasMany('App\Nalog');
    }
}
