<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maderas extends Model
{
    protected $table="maderas";

    public function Muebles(){
        return $this->hasMany('App\Muebles');
    }
}
