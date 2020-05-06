<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubTema extends Model
{
    //
    public function tema(){
        //relacion de uno a muchos
        return $this->hasMany(Tema::class);
    }
    public function materiales_didacticos(){
        //relacion de uno a muchos
        return $this->hasMany(MaterialDidactico::class);
    }
    public function evento(){
        //relacion de uno a muchos
        return $this->hasOne(Evento::class);
    }
    public function aportes(){
        //relacion de uno a muchos
        return $this->hasMany(Aporte::class);
    }
    public function pregunta_trivias(){
        //relacion de uno a muchos
        return $this->hasMany(PreguntaTrivia::class);
    }
}
