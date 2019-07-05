<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    protected $fillable = [
        'title', 
        'description',
        'avg_prog',
        'avg_math',
        'avg_graf'

    ];
        public function group()
        {
            return $this->hasMany(Students::class);
        }
    
}
