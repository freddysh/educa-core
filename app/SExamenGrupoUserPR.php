<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SExamenGrupoUserPR extends Model
{
    //
    public function examen_grup_user(){
        //relacion de uno a muchos
        return $this->belongsTo(SExamenGrupoUser::class);
    }
}
