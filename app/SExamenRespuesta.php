<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SExamenRespuesta extends Model
{
    //
    public function pregunta(){
        //relacion de uno a muchos
        return $this->belongsTo(SExamenPregunta::class);
    }

    public function imagen(){
        //relacion de uno a muchos
        return $this->morphOne(Imagen::class,'imageable');
    }
}
