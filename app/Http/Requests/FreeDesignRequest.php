<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FreeDesignRequest extends FormRequest
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
            'name' => 'required|min:2|max:30',
            'phone_number' => 'required|digits:9',
            'type' => 'required'
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
            'name.required' => __('Name is required'),
            'name.min' => __('Minimum 2 characters'),
            'name.max' => __('Maximum 30 characters'),
            'phone_number.required' => __('A phone_number is required'),
            'phone_number.digits' => __('Phone number must have 9 digits'),
        ];
    }
}
