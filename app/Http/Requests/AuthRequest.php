<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
          'email'=>'required|min:5|max:25|email|exists:App\Models\Users,email',
          'password'=>'required|min:5|max:10',
        ];
    }
    public function messages()
    {
      return[
        'email.required'=>'Поле адреса электронной почты является обязательным и должно содержать минимум 5 символов',
        'email.email'=>'Некорректный адрес электронной почты',
        'password.required'=>'Поле пароль является обязательным',
        'email.exists'=>'Данный адрес электронной почты не существует'



      ];
    }
}
