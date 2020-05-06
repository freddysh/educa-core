<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //es: desde aqui
    //en: from here
    protected $fillable = [
        'name', 'slug', 'description','full-access',
    ];
    public function users(){
        //relacion de muchos a muchos
        return $this->belongsToMany(User::class)->withTimesTamps();
    }
}
