<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addFilmRequest extends FormRequest
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
          'title'=>'required',
          'outdate'=>'required',
          'director'=>'required',
          'description'=>'required',
          'image' => 'image|nullable|max: 1999'
        ];
    }
    public function messages()
    {
      return[
      'title.required'=>'Поле названия фильма является обязательным',
        'outdate.required'=>'Поле даты является обязательным',
      'director.required'=>'Поле режиссера является обязательным',
          'description.required'=>'Поле описания является обязательным',

    ];
    }
}
