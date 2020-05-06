<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FDepartamento extends Model
{
    //
    public function f_asignaturas(){
        return $this->hasMany(FAsignatura::class,'f_departamento_id');
    }
}
