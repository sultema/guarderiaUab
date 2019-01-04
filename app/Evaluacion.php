<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table = "evaluaciones";

    public function inscrito()
    {
        return $this->belongsTo('App\Inscrito');
    }
}
