<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $table = 'coach';
    
    protected $fillable = [

        'id',
        'experience',
        'schedule',
        'about',
        'image'
    ];

    protected $visible = [

        'id',
        'experience',
        'schedule',
        'about',
        'image'
    ];

}
