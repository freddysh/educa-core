<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignaturaExamenRespuesta extends Model
{
    //
    public function asignatura_examen_pregunta(){
        //relacion de uno a muchos
        return $this->belongsTo(AsignaturaExamenPregunta::class);
    }
    public function imagen(){
        //relacion de uno a muchos
        return $this->morphOne(Imagen::class,'imageable');
    }
}
