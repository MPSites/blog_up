<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name' => 'required|max:255',
            'username' => 'required|max:255', 
            'email' => 'required|email|max:255',
            //'password' => 'min:5',
            'role_id' => 'required|exists:roles,id' 
        ];
    }

    public function messages(){
        return [
            'required' => 'The :attribute field is required.',
            'name.max' => 'Name must not be longer than :max characters.',
            'username.max' => 'Username must not be longer than :max characters.',
            'email.max' => 'Email must not be longer than :max characters.',
            //'password.min' => 'Password must be at least :min characters'
        ];
    }
}
