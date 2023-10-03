<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joblist extends Model
{
    protected $fillable = [
        'joblist_title',
        'joblist_company',
        'joblist_description', 
        'joblist_additionalinfo', 
        'joblist_type',  
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


    public function joblists()
    {
        return $this->hasMany('App\Models\joblist');
    }
}
