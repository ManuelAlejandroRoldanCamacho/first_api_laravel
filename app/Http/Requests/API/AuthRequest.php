<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {

        if ($this->is('login')) {
            return [
                'email' => 'required|email',
                'password' => 'required',
            ];
        } elseif ($this->is('register')) {
            return [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|confirmed',
            ];
        }

        return [];

    }

    public function messages()
    {
        return [
            'email.unique' => 'The user already exist',
        ];
    }

}
