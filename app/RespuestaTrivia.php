<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RespuestaTrivia extends Model
{
    //
    public function pregunta_trivia(){
        //relacion de uno a muchos
        return $this->belongsTo(PreguntaTrivia::class);
    }
    public function imagen(){
        //relacion de uno a muchos
        return $this->morphOne(Imagen::class,'imageable');
    }
}
