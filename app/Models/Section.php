<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    function language()
    {
        return $this->hasMany('App\Lang');
    }

    function lessons()
    {
        return $this->hasMany('App\Models\TypeOne');
    }
}
