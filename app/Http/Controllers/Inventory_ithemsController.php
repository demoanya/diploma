<?php

namespace App\Http\Controllers;

use App\Inventory_ithems;
use App\Http\Requests\Inventory_ithemsRequest;

class UserController extends ApiControllers 
{

    public function __construct(User $model)
    {
        $this->model = $model; 
        $this->request = $request;
    }
}