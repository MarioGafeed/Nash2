<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PcategoriesRequest extends FormRequest
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
            'title_en'        => 'nullable|string|max:50',
            'title_ar'        => 'required|string|max:50',
            'image'           => 'required|mimes:jpg|dimensions:width=350,height=299',
            'keyword'         => 'nullable',
            'summary_en'      => 'nullable',
            'summary_ar'      => 'required',
            'desc_en'         => 'nullable',
            'desc_ar'         => 'required',
        ];
    }


    public function attributes()
    {
        return [
            'title'         => trans('main.title'),
            'keyword'       => trans('main.keyword'),
            'summary'       => trans('main.summary'),
            'desc'          => trans('main.desc'),
            'img'           => trans('main.image'),
        ];
    }
}
