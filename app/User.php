<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    
    protected $fillable = [

        'id',
        'name_user',
        'coach_id',
        'email',
        'password',
        'image'
    ];

    protected $visible = [

        'id',
        'name_user',
        'coach_id',
        'email',
        'password',
        'image'
    ];

}
