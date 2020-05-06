<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AporteRespuesta extends Model
{
    //

    public function aporte(){
        //relacion de uno a muchos
        return $this->belongsTo(Aporte::class);
    }
    public function asignatura_grupo_user(){
        //relacion de uno a muchos
        return $this->belongsTo(AsignaturaGrupoUser::class);
    }
}
