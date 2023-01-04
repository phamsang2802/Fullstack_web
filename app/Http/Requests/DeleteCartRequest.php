<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeleteCartRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id'    =>  'required|exists:chi_tiet_don_hangs,id'
        ];
    }

    public function messages()
    {
        return [
            'id.*'  => 'Sản phẩm không tồn tại trong giỏ hàng'
        ];
    }
}
