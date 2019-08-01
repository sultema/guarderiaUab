<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apoderado extends Model
{
    //
    protected $table = 'apoderados';

    public function infantes()
    {
        return $this->belongsToMany('App\Infante')->withTimestamps();
    }
}
