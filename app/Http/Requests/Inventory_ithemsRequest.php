<?php

namespace App\Http\Request;

class InventoryIthemsRequest extends ApiRequest{

    public function rules(){

        return [
            'categories_id' => 'requires|string',
            'name_ithems'=> 'requires|string',
            'image' => 'string',
            'about'=> 'requires|string'
        ];

    }

    public function messages(){

        return[
            'categories_id.required' => 'Categories id is required',
            'name_ithems.required'=> 'Name ithems is required',
            'image.required' => 'Image should be string',
            'about.required'=> 'About is required'
        ]
    }

}

