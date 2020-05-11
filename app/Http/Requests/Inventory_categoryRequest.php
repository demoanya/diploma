<?php

namespace App\Http\Request;

class InventoryCategoriesRequest extends ApiRequest{

    public function rules(){

        return [
            'name_categories' => 'requires|string',
            'image' => 'string'
        ];

    }

    public function messages(){

        return[
            'name_categories.required' => 'Name categories is required',
            'image.required' => 'Image should be string'
        ]
    }

}

