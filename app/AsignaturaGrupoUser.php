<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignaturaGrupoUser extends Model
{
    //

    public function asignatura_grupo(){
        //relacion de uno a muchos
        return $this->belongsTo(AsignaturaGrupo::class);
    }
    public function eventos(){
        //relacion de uno a muchos
        return $this->hasMany(Evento::class);
    }

    public function aportes(){
        //relacion de uno a muchos
        return $this->hasMany(Aporte::class);
    }
    public function aporte_respuestas(){
        //relacion de uno a muchos
        return $this->hasMany(AporteRespuesta::class);
    }
    public function user_pregunta_trivia(){
        //relacion de uno a muchos
        return $this->hasMany(AsigGruUserPreTri::class);
    }
    public function asig_exa_asig_gru_user(){
        //relacion de uno a muchos
        return $this->hasMany(AsigExaAsigGruUser::class);
    }

    public function examen_grupo_user(){
        //relacion de uno a muchos
        return $this->hasMany(SExamenGrupoUser::class);
    }
}
