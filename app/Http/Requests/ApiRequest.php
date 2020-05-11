<?php

namespace App\Http\Requests;

use Illuminate\Fondation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\ExceptionHttpResponseException;

abstract class ApiRequest extends FormRequest {

    public function authorize(){
        return true;
    }

    protected function failedValidation(Validator $validator){
        throw new HttpResponseExeption(response()->json($validator->errors(), status: 422));
    }

}