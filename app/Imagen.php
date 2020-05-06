<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    //
    public function imageable(){
        // se usa de esta forma para indicar que la relacion es "transformado para",
        // porque hay varias tablas que tendran imagenes y esto hace que la tabla f_imagens sea generico
        return $this->morphTo();
    }
}
