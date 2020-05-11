<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diets extends Model
{
    protected $table = 'diets';
    
    protected $fillable = [

        'id',
        'name_diets',
        'image',
        'about'
    ];

    protected $visible = [

        'id',
        'name_diets',
        'image',
        'about'
    ];

}