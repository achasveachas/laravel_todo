<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Use slugs as the key in the routing
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
