<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
    //
    public function puntajes(){
        //relacion de uno a muchos
        return $this->hasOne(Puntaje::class);
    }
    public function grupos(){
        //relacion de uno a muchos
        return $this->hasMany(Grupo::class);
    }
    public function modalidades(){
        //relacion de uno a muchos
        return $this->hasMany(Modalidad::class);
    }
    public function imagen(){
        //relacion de uno a muchos
        return $this->morphOne(Imagen::class,'imageable');
    }
}
