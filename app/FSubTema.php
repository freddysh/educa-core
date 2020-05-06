<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FSubTema extends Model
{
    //
    public function f_materiales_didacticos(){
        return $this->hasMany(FMaterialDidactico::class,'f_sub_tema_id');
    }
    public function f_pregunta_trivias(){
        return $this->hasMany(FPreguntaTrivia::class,'f_sub_tema_id');
    }
}
