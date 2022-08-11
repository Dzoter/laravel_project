<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPostRequest extends FormRequest
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
            'header'=>'required|string|max:10',
            'info'=>'string|max:40',
            'signature'=>'string|max:10'
        ];
    }

    public function messages()
    {
        return [
            'header.required'=>'поле Заголовок является обязательным',
            'header.string'=>'поле Заголовок должно быть строкой',
            'header.max' =>'Заголовок не более 10 символов'
        ];
    }
}
