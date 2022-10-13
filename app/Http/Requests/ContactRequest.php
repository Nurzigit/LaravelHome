<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:800',
            'message' => 'min:15|max:500'
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Поля имя является обязательным',

            'email.required' => 'Поля email является обязательным',
            'email.email' => 'Поля email был неправильно заполнен',

            'subject.required' => 'Поля тема является обязательным',
            'subject.min' => 'Поля тема должен состоят из не менее 5 букв',
            'subject.max' => 'Поля тема должен непривышать 50 букв',


            'message.min' => 'Поля тема должен состоят из не менее 15 букв',
            'massage.max' => 'Поля тема должен непривышать 500 букв',
        ];
    }

}
