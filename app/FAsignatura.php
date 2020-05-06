<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAsignatura extends Model
{
    //
    public function f_temas(){
        return $this->hasMany(FTema::class,'f_asignatura_id');
    }
    public function f_asignaturas_examen(){
        return $this->hasMany(FAsignaturaExamen::class,'f_asignatura_id');
    }
    public function f_imagen(){
        // hasMany polimorphico
        return $this->morphOne(FImagen::class,'f_imageable');
    }
}
