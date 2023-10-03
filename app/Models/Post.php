<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   

    protected $fillable = [
        'body',
        'post_image',
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function likes()
    {
        return $this->hasMany('App\Models\Like');
    }
}
