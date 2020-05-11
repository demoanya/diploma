<?php

namespace App\Http\Request;

class UserRequest extends ApiRequest{

    public function rules(){

        return [
            'name_user' => 'requires|string',
            'coach_id'=> 'string',
            'email'=> 'requires|string',
            'password'=> 'requires|string',
            'image' => 'string'
        ];

    }

    public function messages(){

        return[
            'name_user.required' => 'Name user is required',
            'email.required'=> ' Email is required',
            'password.required'=> 'Password is required',
            'image.required' => 'Image should be string'
        ]
    }

}

