<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryIthems extends Model
{
    protected $table = 'inventory_ithems';
    
    protected $fillable = [

        'id',
        'categories_id',
        'name_ithems',
        'image',
        'about'
    ];

    protected $visible = [

        'id',
        'categories_id',
        'name_ithems',
        'image',
        'about'
    ];

}
