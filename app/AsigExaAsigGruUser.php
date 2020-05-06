<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsigExaAsigGruUser extends Model
{
    //

    public function asignatura_examen(){
        //relacion de uno a muchos
        return $this->belongsTo(AsignaturaExamen::class);
    }
    public function asignatura_grupo_user(){
        //relacion de uno a muchos
        return $this->belongsTo(AsignaturaGrupoUser::class);
    }
    public function asig_exa_asig_gru_user_p_r(){
        //relacion de uno a muchos
        return $this->hasMany(AsigExaAsigGruUserPR::class);
    }
}
