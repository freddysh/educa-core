<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    //
    public function universidad(){
        //relacion de uno a muchos
        return $this->belongsTo(Universidad::class);
    }

    public function asignatura_grupos(){
        //relacion de uno a muchos
        return $this->hasMany(AsignaturaGrupo::class);
    }
}
