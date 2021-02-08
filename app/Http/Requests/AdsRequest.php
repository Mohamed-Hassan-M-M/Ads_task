<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdsRequest extends FormRequest
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
            'title'=>['required', 'string'],
            'description'=>['required', 'string'],
            'city'=>['required', 'exists:locations,id'],
            'image'=>'required|image|mimes:jpeg,webp,png,jpg,gif,svg',
        ];
    }

    public function messages()
    {
        return [
            'city.exists'=>'This city does not belong to our cities',
            'required' => 'The :attribute field is required.',
            'string' => 'The :attribute field must be string.',
            'image.image' => 'The must be an image.',
            'mimes' => 'The :attribute must be of time jpeg,webp,png,jpg,gif,svg.'
        ];
    }
}
