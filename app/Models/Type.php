<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function language()
    {
        return $this->belongsTo('App\Models\Lang', 'lang_id');
    }
}
