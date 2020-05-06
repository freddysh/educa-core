<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    //
    public function asignatura(){
        //relacion de uno a muchos
        return $this->hasMany(Asignatura::class);
    }
    public function sub_temas(){
        //relacion de uno a muchos
        return $this->hasMany(SubTema::class);
    }

    public function asignatura_examen(){
        //relacion de uno a muchos
        return $this->belongsToMany(AsignaturaExamen::class)->withTimestamps();
    }
    public function s_examenes(){
        //relacion de uno a muchos
        return $this->belongsToMany(SExamen::class)->withTimestamps();
    }
}
