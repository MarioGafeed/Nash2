<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class VpostsRequest extends FormRequest
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
            'title_en'      => 'required',
            'title_ar'      => 'nullable',
            'vcat_id'       => 'required|exists:vcategories,id',
            'vtaq_id'       => 'required|exists:vtaqs,id',
            'content'       => 'required',
            'keyword'       => 'required',
            'desc_en'       => 'required',
            'desc_ar'       => 'nullable',
            'status'        => 'required|in:active,inactive',
            // 'image'         => 'required|mimes:jpg|dimensions:min_width=255,min_height=336',
            'image'         => 'required|mimes:jpg|dimensions:width=255,height=336',
        ];
    }


    public function attributes()
    {
        return [
            'title'       => trans('main.title'),
            'vcat_id'     => trans('main.vcategory'),
            'content'     => trans('main.content'),
            'keyword'     => trans('main.keyword'),
            'desc'        => trans('main.description'),
            'status'      => trans('main.status'),
            'image'       => trans('main.image'),
        ];
    }
}
