<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTime;


class Infante extends Model
{
    //
    protected $table = "infantes";
    protected $fillable = [
        'nombres',
        'apaterno',
        'amaterno',
        'sexo',
        'fechanacimiento',
        'beneficiario_id'
    ];

    public function edad()
    { 
       $hoy = new DateTime();
       $fnac = new DateTime($this->fechanacimiento);
       $ed = $fnac->diff($hoy);
       return $ed->format('%y');
    }

    public function beneficiario()
    {
        return $this->belongsTo('App\Beneficiario');
    }
    public function inscripciones()
    {
        return $this->hasMany('App\Inscrito');
    }
}
