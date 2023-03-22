<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class feedbackRequest extends FormRequest
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
    public function rules()
    {
        return [
          'name'=>'required',
          'message'=>'required',
        ];
    }
    public function messages()
    {
      return[
        'name.required'=>'Поле имени не должно быть пустым',
        'message.required'=>'Поле обращения не должно быть пустым',
      ];
    }
}
