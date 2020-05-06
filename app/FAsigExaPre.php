<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAsigExaPre extends Model
{
    //
    public function f_asig_exa_res(){
        return $this->hasMany(FAsigExaRes::class,'f_asig_exa_pre_id');
    }
    public function f_imagen(){
        // hasMany polimorphico
        return $this->morphOne(FImagen::class,'f_imageable');
    }
}
