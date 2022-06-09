<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageStoreRequest extends FormRequest
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
            'category_id' => 'required',
            'image' => 'required|file|max:5120|mimes:png,jpg,jpeg'
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
            'category_id.required' => __('You must select a category'),
            'image.required' => __('Image is required'),
            'image.mimes' => __('Format: png, jpg, jpeg'),
            'image.max' => __('Image size should be no more than 5 MB')
        ];
    }

}
