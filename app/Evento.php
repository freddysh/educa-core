<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //

    public function sub_tema(){
        //relacion de uno a muchos
        return $this->belongsTo(SubTema::class);
    }
    public function asignatura_grupo_user(){
        //relacion de uno a muchos
        return $this->belongsTo(AsignaturaGrupoUser::class);
    }
}
