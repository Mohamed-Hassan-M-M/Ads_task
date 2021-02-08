<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email'=>['required', 'email', 'unique:users,email'],
            'city'=>['required', 'exists:locations,id'],
            'password'=>'required|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'city.exists'=>'This city does not belong to our cities',
            'email' => 'The :attribute field must be email.',
            'required' => 'The :attribute field is required.',
            'confirm' => 'The :attribute does not matched.',
        ];
    }
}
