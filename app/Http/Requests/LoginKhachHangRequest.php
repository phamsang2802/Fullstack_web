<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginKhachHangRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email'         =>  'required|email',
            'password'      =>  'required|min:8',
            // 'g-recaptcha-response' => 'required|captcha',
        ];
    }
}
