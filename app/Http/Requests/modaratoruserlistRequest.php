<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class modaratoruserlistRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return  true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|unique:user_table|max:5|bail', //uniqe---name is already taken,,bail-->only one error show
            'password' => 'required|min:8|max: 20',

            'email' => 'required|max:50|bail'
        ];
    }
    public function messages(){
        return [

            'username.required' => "can't left empty...",
            'password.required' =>"can't left empty...",

            'email.required' => "email can't left empty..."
        ];
    }
}
