<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function clicks()
    {
        return $this->hasMany(related: Click::class);
    }

   

    public function listings()
    {
        return $this->belongsToMany(related:Listing::class);
    }
}
