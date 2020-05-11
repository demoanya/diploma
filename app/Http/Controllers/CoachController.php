<?php

namespace App\Http\Controllers;

use App\Coach;
use App\Http\Requests\CoachRequest;

class CoachController extends ApiControllers 
{

    public function __construct(User $model)
    {
        $this->model = $model; 
        $this->request = $request;
    }
}