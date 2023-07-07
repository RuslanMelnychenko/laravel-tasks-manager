<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ];
    }

    public function attributes(): array
    {
        return [
            'email' => __('auth.input.email'),
            'password' => __('auth.input.password'),
        ];
    }

    public function messages(): array
    {
        return [
            'password.confirmed' => __('auth.confirmed'),
            'email.unique' => __('auth.unique'),
        ];
    }
}
