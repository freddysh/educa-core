<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aporte extends Model
{
    //

    public function sub_temas(){
        //relacion de uno a muchos
        return $this->belongsTo(SubTema::class);
    }
    public function asignatura_grupo_user(){
        //relacion de uno a muchos
        return $this->belongsTo(AsignaturaGrupoUser::class);
    }
    public function respuestas(){
        //relacion de uno a muchos
        return $this->hasMany(AporteRespuesta::class);
    }
}
