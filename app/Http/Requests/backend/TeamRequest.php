<?php

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'image' => 'mimes:jpg,bmp,png,jpeg | required | image', //10000 kb
            'employee' => 'required | string',
            'position' => 'nullable',
            'description' => 'nullable',
            'facebook' => 'required | url',
            'twitter' => 'required | url',
            'linkedin' => 'required | url',
            'gmail' => 'required',
            'status' => 'nullable'
        ];
    }
}
