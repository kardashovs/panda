<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    public function language()
    {
        return $this->belongsTo('App\Models\Lang', 'lang_id');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }
}
