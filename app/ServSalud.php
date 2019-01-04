<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServSalud extends Model
{
    protected $table="servicios_salud";
    //
    public function inscrito()
    {
        return $this->belongsTo('App\Inscrito');
    }
}
