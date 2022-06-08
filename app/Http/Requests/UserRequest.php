<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'nik' => 'required',
            'email' => 'required',
            'name' => 'required',
            'password' => 'required',
            'level' => 'required',
            //
        ];

        switch($this->method()){
            case 'PUT' : $rules['level'] = 'required' . $this->route('useredit');
            break;
        }
        return $rules;
    }
}
