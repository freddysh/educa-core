<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    //
    public function grupo(){
        //relacion de muchos a muchos
        return $this->belongsTo(Grupo::class);
    }
}
