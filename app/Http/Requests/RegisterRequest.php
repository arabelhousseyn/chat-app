<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
            'phone' => 'required|digits:10|unique:users,phone',
            'email' => 'email:rfc,dns,filter|unique:users,email',
            'password' => ['required',Password::default()],
            'fullName' => 'required',
            'avatar' => 'mimes:jpg,jpeg,png',
            'gender' => 'required',
            'dob' => 'required|date:Y-m-d'
        ];
    }
}
