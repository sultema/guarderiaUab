<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table="grupos";
    
    public function educadora()
    {
        return $this->belongsTo('App\Educadora');
    }

    public function inscripciones()
    {
        return $this->hasMany('App\Inscrito');
    }
}
