<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    //
    public function universidad(){
        //relacion de muchos a muchos
        return $this->belongsTo(Universidad::class);
    }
    public function carreras(){
        //relacion de muchos a muchos
        return $this->hasMany(Carrera::class);
    }
}
