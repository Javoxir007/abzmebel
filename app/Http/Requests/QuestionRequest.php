<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'question' => 'required',
            'name_q' => 'required',
            'phone_number_q' => 'required|digits:9'
        ];
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
    */

    public function messages()
    {
        return [
            'question.required' => __('Question is required'),
            'name_q.required' => __('Name is required'),
            'phone_number_q.required' => __('A phone_number is required'),
            'phone_number_q.digits' => __('Phone number must have 9 digits'),
        ];
    }
}
