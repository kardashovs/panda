<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeSection extends Model
{
    public function typeable()
    {
        return $this->morphTo();
    }

    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'lesson_user');
    }

}
