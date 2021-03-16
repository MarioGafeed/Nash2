<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
        $return = [
            'name'     => 'required',
            'email'    => 'required|unique:users',
            'phone'    => 'required|unique:users',
            'password' => 'required|confirmed',
            'type'     => 'required|in:user,admin',          
            'image'    => 'required|mimes:jpg|dimensions:width=115,height=92',
        ];

        if (in_array($this->method(), ['POST', 'PATCH'])) {
            $return['email'] = 'required|unique:users,phone,'.$this->route()->parameter('user').',id';
            $return['phone'] = 'required|unique:users,phone,'.$this->route()->parameter('user').',id';
        }

        return $return;
    }


    public function attributes()
    {
        return [
            'name'     => trans('main.name'),
            'email'    => trans('main.email'),
            'password' => trans('main.password'),
            'type'     => trans('main.type'),
        ];
    }
}
