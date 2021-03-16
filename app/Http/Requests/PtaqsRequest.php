<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PtaqsRequest extends FormRequest
{
    /**
     * Determine if the pcategories is authorized to make this request.
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
            'name'     => 'required',
        ];
    }


    public function attributes()
    {
        return [
            'name'       => trans('main.name'),            
        ];
    }
}
