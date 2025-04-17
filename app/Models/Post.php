<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'type', // 'news' or 'project'
        'description'
    ];

    /**
     * Get the route key for the model (for slug URLs)
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}