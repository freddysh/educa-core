<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsigExaAsigGruUserPR extends Model
{
    //
    public function asig_exa_asig_gru_user(){
        //relacion de uno a muchos
        return $this->belongsTo(AsigExaAsigGruUser::class);
    }
}
