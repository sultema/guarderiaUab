<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Educadora extends Model
{
    protected $table = "educadoras";
    //
    protected $fillable = [
        'nombres',
        'apaterno',
        'amaterno'
    ];

    public function grupos()
    {
        return $this->hasMany('App\Grupo');
    }
}
