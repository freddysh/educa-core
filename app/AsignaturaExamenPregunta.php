<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignaturaExamenPregunta extends Model
{
    //
    public function asignatura_examen(){
        //relacion de uno a muchos
        return $this->belongsTo(AsignaturaExamen::class);
    }
    public function asignatura_examen_respuestas(){
        //relacion de uno a muchos
        return $this->hasMany(AsignaturaExamenRespuesta::class);
    }
    public function imagen(){
        //relacion de uno a muchos
        return $this->morphOne(Imagen::class,'imageable');
    }
}
