<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscrito extends Model
{
    //
    protected $table="inscritos";


    public function infante()
    {
        return $this->belongsTo('App\Infante');
    }

    public function grupo()
    {
        return $this->belongsTo('App\Grupo');
    }

    public function evaluaciones()
    {
        return $this->hasMany('App\Evaluacion');
    }
    public function asistencias()
    {
        return $this->hasMany('App\Asistencia');
    }
    public function serviciosNutricionales()
    {
        return $this->hasMany('App\ServNutricion');
    }
    public function serviciosSicologicos()
    {
        return $this->hasMany('App\ServSicologico');
    }
    public function serviciosSalud()
    {
        return $this->hasMany('App\ServSalud');
    }
}
