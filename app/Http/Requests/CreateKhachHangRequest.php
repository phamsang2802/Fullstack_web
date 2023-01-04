<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateKhachHangRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'full_name'         =>  'required|min:5',
            'email'             =>  'required|email|unique:khach_hangs,email',
            'password'          =>  'required|string|min:8|max:30|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@!$%&*]/',
            're_password'       =>  'required|same:password',
            'phone_number'      =>  'required|digits_between:10,12',
        ];
    }

}
