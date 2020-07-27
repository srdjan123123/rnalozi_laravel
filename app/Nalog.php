<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nalog extends Model
{
    protected $fillable = ['administracija','kupac','operater','status'];

    public function administracija(){
        return $this->belongsTo('App\Administracija');
    }
    public function kupac(){
    return $this->belongsTo('App\Kupac');
}
public function operater(){
    return $this->belongsTo('App\Operater');
}
public function status(){
    return $this->belongsTo('App\Status');
}

}
