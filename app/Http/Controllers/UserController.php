<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;

class UserController extends ApiControllers 
{

    public function __construct(User $model)
    {
        $this->model = $model; 
        $this->request = $request;
    }
}