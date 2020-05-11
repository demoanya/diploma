<?php

namespace App\Http\Request;

class UDietsRequest extends ApiRequest{

    public function rules(){

        return [
            'name_diets' => 'requires|string',
            'image' => 'string',
            'about'=> 'requires|string'
        ];

    }

    public function messages(){

        return[
            'name_diets.required'=> 'Name diets is required',
            'image.required' => 'Image should be string',
            'about.required'=> 'About is required'
        ]
    }

}

