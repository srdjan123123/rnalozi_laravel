<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nalog extends Model
{
    protected $fillable = ['administracija','kupac','operater','status'];

    public function administracija(){
        return $this->belongsTo('App\Administracija','administracija');
    }
    public function kupac(){
    return $this->belongsTo('App\Kupac','kupac');
}
public function operater(){
    return $this->belongsTo('App\Operater','operater');
}
public function status(){
    return $this->belongsTo('App\Status','status');
}

}
