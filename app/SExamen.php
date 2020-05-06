<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SExamen extends Model
{
    //

    public function asignatura_grupo(){
        //relacion de uno a muchos
        return $this->belongsTo(AsignaturaGrupo::class);
    }
    public function temas(){
        //relacion de uno a muchos
        return $this->belongsToMany(Tema::class)->withTimestamps();
    }
    public function preguntas(){
        //relacion de uno a muchos
        return $this->hasMany(SExamenPregunta::class);
    }
    public function examen_grupo_user(){
        //relacion de uno a muchos
        return $this->hasMany(SExamenGrupoUser::class);
    }
    public function imagen(){
        //relacion de uno a muchos
        return $this->morphOne(FImagen::class,'f_imageable');
    }
}
