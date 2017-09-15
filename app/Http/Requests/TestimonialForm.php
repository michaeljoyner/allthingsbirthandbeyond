<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialForm extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'client' => 'required|max:255',
            'body'   => 'required'
        ];
    }

    public function requiredData()
    {
        return $this->only(['client', 'body']);
    }
}
