<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VcategoriesRequest extends FormRequest
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
            'title_en'        => 'required|string|max:50',
            'title_ar'        => 'required|string|max:50',
            'image'           => 'required|mimes:jpg|dimensions:width=255,height=336',
            'keyword'         => 'nullable',
            'summary_en'      => 'required',
            'summary_ar'      => 'required',
            'desc_en'         => 'required',
            'desc_ar'         => 'required',
        ];
    }


    public function attributes()
    {
        return [
            'title'       => trans('main.title'),
            'keyword'       => trans('main.keyword'),
            'summary'       => trans('main.summary'),
            'desc'       => trans('main.desc'),
        ];
    }
}
