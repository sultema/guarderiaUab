<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    //

    public function inscrito()
    {
        return $this->belongsTo('App\Inscrito');
    }
}
