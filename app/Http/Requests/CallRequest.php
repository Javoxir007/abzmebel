<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CallRequest extends FormRequest
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
            'address' => 'required',
            'time' => 'required|min:5|max:5'
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
            'address.required' => __('Address is required'),
            'time.required' => __('Time is required'),
            'time.min' => __('A time minimum 4 number format: 02:30'),
            'time.max' => __('A time maximum 4 number format: 12:30'),
        ];
    }
}
