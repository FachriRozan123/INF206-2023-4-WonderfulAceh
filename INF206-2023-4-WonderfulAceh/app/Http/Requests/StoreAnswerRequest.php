<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnswerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'answer1' => 'required',
            'answer2' => 'required',
            'answer3' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'answer1.required' => 'Please select an answer for question 1.',
            'answer2.required' => 'Please select an answer for question 2.',
            'answer3.required' => 'Please select an answer for question 3.',
        ];
    }
}
