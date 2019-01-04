<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServNutricion extends Model
{
    protected $table = "serv_nutricionales";

    public function inscrito()
    {    
        return $this->belongsTo('App\Inscrito');
    }
}
