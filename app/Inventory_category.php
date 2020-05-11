<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryCategories extends Model
{
    protected $table = 'inventory_categories';
    
    protected $fillable = [

        'id',
        'name_categories',
        'image'
    ];

    protected $visible = [

        'id',
        'name_categories',
        'image'
    ];

}
