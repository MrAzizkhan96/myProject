<?php

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
            'image' => 'mimes:png,bmp,jpg,jpeg',
            'title' => 'required',
            'subtitle' => 'required',
            'gallery_category_id' => 'required'
        ];
    }
}
