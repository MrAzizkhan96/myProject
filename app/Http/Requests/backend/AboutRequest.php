<?php

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'icon' => 'mimes:jpg,bmp,png,jpeg | max: 10000', //10000 kb
            'icon_title' => 'nullable',
            'title' => 'nullable',
            'content' => 'nullable',
            'description' => 'nullable'
        ];
    }
}
