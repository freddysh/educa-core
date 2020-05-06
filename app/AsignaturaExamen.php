<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignaturaExamen extends Model
{
    //
    public function asignatura(){
        //relacion de uno a muchos
        return $this->belongsTo(Asignatura::class);
    }
    public function asignatura_examen_pregunta(){
        //relacion de uno a muchos
        return $this->hasMany(AsignaturaExamenPregunta::class);
    }
    public function temas_condicion(){
        //relacion de uno a muchos
        return $this->belongsToMany(Tema::class)->withTimestamps();
    }
    public function asig_exa_asig_gru_user(){
        //relacion de uno a muchos
        return $this->hasMany(AsigExaAsigGruUser::class);
    }

}
