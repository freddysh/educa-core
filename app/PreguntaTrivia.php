<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreguntaTrivia extends Model
{
    //
    public function sub_tema(){
        //relacion de uno a muchos
        return $this->belongsTo(SubTema::class);
    }
    public function respuesta_trivias(){
        //relacion de uno a muchos
        return $this->hasMany(RespuestaTrivia::class);
    }
    public function asig_gru_user_pre_tri(){
        //relacion de uno a muchos
        return $this->hasMany(AsigGruUserPreTri::class);
    }
    public function imagen(){
        //relacion de uno a muchos
        return $this->morphOne(Imagen::class,'imageable');
    }
}
