<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SExamenPregunta extends Model
{
    //
    public function respuestas(){
        //relacion de uno a muchos
        return $this->hasMany(SExamenRespuesta::class);
    }
    public function examen(){
        //relacion de uno a muchos
        return $this->belongsTo(SExamen::class);
    }
    public function imagen(){
        //relacion de uno a muchos
        return $this->morphOne(Imagen::class,'imageable');
    }
}
