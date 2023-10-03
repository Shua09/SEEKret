<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'banner_hash',
        'banner_body',
        'banner_image',  
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


    public function banners()
    {
        return $this->hasMany('App\Models\banner');
    }
}
