<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addGameRequest extends FormRequest
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
          'name'=>'required',
          'outdate'=>'required',
            'Developers'=>'required',
            'platform'=>'required',
            'description'=>'required',

        ];
    }
    public function messages()
    {
      return[
      'name.required'=>'Поле названия игры является обязательным',
        'outdate.required'=>'Поле даты является обязательным',
      'Developers.required'=>'Поле разработчиков является обязательным',
          'platform.required'=>'Поле платформы является обязательным',
            'description.required'=>'Поле описания является обязательным',
    ];
    }
}
