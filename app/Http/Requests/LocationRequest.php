<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LocationRequest extends FormRequest
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
            'city'=>['required', 'string', 'unique:locations,city'],
        ];
    }

    public function messages()
    {
        return [
            'required' => 'The :attribute field is required.',
            'string' => 'The :attribute field must be string.',
            'city.unique' => 'The :attribute has already been taken.',
        ];
    }
}
