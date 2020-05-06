<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FPreguntaTrivia extends Model
{
    //
    public function f_prespuesta_trivias(){
        return $this->hasMany(FRespuestaTrivia::class,'f_pregunta_trivia_id');
    }
    public function f_imagen(){
        // hasMany polimorphico
        return $this->morphOne(FImagen::class,'f_imageable');
    }
}
