<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateHoaDonRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ten_nguoi_nhan'        =>  'required|min:5|max:100',
            'so_dien_thoai_nhan'    =>  'required|digits_between:8,15',
            'dia_chi_nhan'          =>  'required|min:5|max:255',
        ];
    }
}
