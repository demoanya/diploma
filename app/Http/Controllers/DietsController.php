<?php

namespace App\Http\Controllers;

use App\Dietsr;
use App\Http\Requests\DietsRequest;

class DietsController extends ApiControllers 
{

    public function __construct(User $model)
    {
        $this->model = $model; 
        $this->request = $request;
    }
}