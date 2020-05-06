<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SExamenGrupoUser extends Model
{
    //

    public function examen(){
        //relacion de uno a muchos
        return $this->belongsTo(SExamen::class);
    }
    public function asignatura_grupo_user(){
        //relacion de uno a muchos
        return $this->belongsTo(AsignaturaGrupoUser::class);
    }
    public function examen_grup_user_p_r(){
        //relacion de uno a muchos
        return $this->hasMany(SExamenGrupoUserPR::class);
    }
}
