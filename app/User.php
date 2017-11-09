<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'lang_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function lang()
    {
        return $this->belongsTo('App\Models\Lang');
    }

    public function lessons()
    {
        return $this->belongsToMany('App\Models\TypeSection', 'lesson_user');
    }

    public function scopeLessonCount($query)
    {
        return $query->where('votes', '>', 100);
    }

}
