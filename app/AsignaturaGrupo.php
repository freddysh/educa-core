<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignaturaGrupo extends Model
{
    //

    public function modalidad(){
        //relacion de uno a muchos
        return $this->belongsTo(Modalidad::class);
    }
    public function asignaturas(){
        //relacion de uno a muchos
        return $this->hasMany(Asignatura::class);
    }
    public function asig_grupo_user(){
        //relacion de uno a muchos
        return $this->hasOne(AsignaturaGrupoUser::class);
    }
    public function user(){
        //relacion de uno a muchos
        return $this->hasOne(User::class);
    }
    public function examenes(){
        //relacion de uno a muchos
        return $this->hasMany(SExamen::class);
    }
}
