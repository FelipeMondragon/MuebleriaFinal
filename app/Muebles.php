<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Muebles extends Model
{
    protected $table="muebles";

    
    public function Maderas(){
        return $this->belongsTo('App\Maderas','madera_id');
    }

}
