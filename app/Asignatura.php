<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    //
    public function asignatura_grupo(){
        //relacion de uno a muchos
        return $this->belongsTo(AsignaturaGrupo::class);
    }
    public function temas(){
        //relacion de uno a muchos
        return $this->hasMany(Tema::class);
    }
    public function asignatura_examenes(){
        //relacion de uno a muchos
        return $this->hasMany(AsignaturaExamen::class);
    }
    public function imagen(){
        //relacion de uno a muchos
        return $this->morphOne(Imagen::class,'imageable');
    }
}
