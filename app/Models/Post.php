<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'image',
        'desc',
        'type' // 'news' or 'project'
    ];


    public function getRouteKeyName()
    {
        return 'slug';
    }

}
