<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'registerEmail'=>'required|email',
            'registerName' => 'required|string|min:3|max:10',
            'registerPassword'=>'min:6|required_with:registerRepeatPassword|same:registerRepeatPassword',

        ];
    }

    public function messages()
    {
        return [
            'registerEmail.required'=>'поле email является обязательным',
            'registerEmail.email'=>'поле email должно быть почтой',
            'registerName.required'=>'поле Имя является обязательным',
            'registerName.min'=>'поле имя должно содержать минимум 3 символа',
            'registerName.max'=>'поле имя должно содержать максимум 10 символов',
            'registerPassword.required_with'=>'поля пароля являются  обязательными',
            'registerPassword.same'=>'поля пароля должны совпадать',
            'registerPassword.min'=>'поле пароля должно содержать минимум 6 символов',
            'registerRepeatPassword.min'=>'поле пароля должно содержать минимум 6 символов',

        ];
    }

}
