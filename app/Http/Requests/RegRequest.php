<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegRequest extends FormRequest
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
          'email'=>'required|min:5|max:25|email',
          'password'=>'required|min:5|max:10',
          'checkpassword'=>'required|min:5|max:10|same:password'
        ];
    }
    public function messages()
    {
      return[
        'email.required'=>'Поле адреса электронной почты является обязательным и должно содержать минимум 5 символов',
        'email.email'=>'Некорректный адрес электронной почты',
        'checkpassword.same'=>'Пароли не совпадают',
        'password.required'=>'Поле пароль является обязательным',
        'checkpassword.required'=>'Поле подтверждения пароль является обязательным',


      ];
    }
}
