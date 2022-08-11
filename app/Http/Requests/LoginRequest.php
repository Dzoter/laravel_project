<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email'=>'required|email',
            'password'=>'required'
        ];
    }
    public function attributes()
    {
        return [
            'password'=>'Пароль',
            'email'=>'email'
        ];
    }
    public function messages()
    {
        return [
            'password.required'=>'поле пароль является обязательным',
            'email.required'=>'поле email является обязательным',
            'email.email' =>'поле email должно быть валидным email адресом'
        ];
    }
}
