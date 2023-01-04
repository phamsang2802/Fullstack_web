<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateTaiKhoanAdminRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id'                    =>  'required|exists:admins,id',
            'ho_va_ten'             =>  'required|min:5',
            'so_dien_thoai'         =>  'required|digits:10',
            'ngay_sinh'             =>  'required|date',
            'rule_id'               =>  'required',
        ];
    }

    public function messages()
    {
        return [
            'id.*'                    =>  'Tài khoản không tồn tại',
            'ho_va_ten.*'             =>  'Họ và tên phải từ 5 ký tự',
            'so_dien_thoai.*'         =>  'Số điện thoại phải đúng 10 số',
            'ngay_sinh.*'             =>  'Ngày sinh phải là định dạng ngày tháng năm',
            'rule_id.*'               =>  'Phải chọn loại tài khoản',
        ];
    }
}
