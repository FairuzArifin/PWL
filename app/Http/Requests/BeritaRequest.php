<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeritaRequest extends FormRequest
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
        $rules = [
            'title' => 'required',
            'slug' => 'required|unique:posts',
            'excerpt' => 'required',
            'body' => 'required',
            //
        ];

        switch($this->method()){
            case 'PUT' : $rules['slug'] = 'required' . $this->route('blogedit');
            break;
        }
        return $rules;
    }
}
