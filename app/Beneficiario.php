<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    //
   protected $table = 'beneficiarios';
   protected $fillable =[
            'nombres',
            'apaterno',
            'amaterno',
            'ci',
            'telefono',
            'direccion',
            'ru',
            'carrera'
   ];

    public function infantes()
    {
        return $this->hasMany('App\Infante');
    }
    
}
