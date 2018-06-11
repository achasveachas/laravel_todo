<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Use slugs as the key in the routing
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
