<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class MessagesRequest extends FormRequest
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
            'name'    =>'required|string|max:255',
            'email'   =>'required|email|max:255',
            'phone'   =>'nullable',
            'subject' =>'nullable|string|max:255',
            'body'    =>'required|string',
        ];
    }


    public function attributes()
    {
        return [
            'name'        => trans('main.name'),
            'email'       => trans('main.email'),
            'phone'       => trans('main.phone'),
            'subject'     => trans('main.subject'),
            'body'        => trans('main.body'),
        ];
    }
}
