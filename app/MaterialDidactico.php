<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialDidactico extends Model
{
    //
    public function sub_tema(){
        //relacion de uno a muchos
        return $this->hasMany(SubTema::class);
    }
}
