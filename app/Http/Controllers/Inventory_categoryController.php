<?php

namespace App\Http\Controllers;

use App\Inventory_category;
use App\Http\Requests\Inventory_categoryRequest;

class UserController extends ApiControllers 
{

    public function __construct(User $model)
    {
        $this->model = $model; 
        $this->request = $request;
    }
}