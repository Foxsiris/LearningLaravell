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
        return true;//нужно писать true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() //здесь обозначаем какие поля каким требованиям должны соответстовать
    {
        return [
            'subject' => 'required|min:5|max:50',
            'email'=> 'required|email',
            'name'=> 'required'
        ];
    }

    public function messages() // позволяет использовать отображть ошибки любой язык
    {
        return [
            'email.email'=> 'Ошибка в поле Email',
            'email.required'=> 'Email Является обязательным полем'
        ];
    }
}
