<?php

namespace App\Http\Request;

class CoachRequest extends ApiRequest{

    public function rules(){

        return [
            'experience' => 'requires|string',
            'schedule'=> 'requires|string',
            'about'=> 'requires|string',
            'image' => 'string'
        ];

    }

    public function messages(){

        return[
            'experience.required' => 'Experience is required',
            'schedule.required'=> 'Schedule is required',
            'about.required'=> 'About is required',
            'image.required' => 'Image should be string'
        ]
    }

}

