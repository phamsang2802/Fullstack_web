<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTaiKhoanAdminRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ho_va_ten'             =>  'required|min:5',
            'email'                 =>  'required|email|unique:admins,email',
            'so_dien_thoai'         =>  'required|digits:10',
            'password'              =>  'required|min:6|max:30',
            're_password'           =>  'required|same:password',
            'ngay_sinh'             =>  'required|date',
            'rule_id'               =>  'required',
        ];
    }

    public function messages()
    {
        return [
            'ho_va_ten.*'             =>  'Họ và tên phải từ 5 ký tự',
            'email.*'                 =>  'Email phải đúng định dạng hoặc không được trùng',
            'so_dien_thoai.*'         =>  'Số điện thoại phải đúng 10 số',
            'password.*'              =>  'Mật khẩu phải từ 6 đến 30 ký tự',
            're_password.*'           =>  'Mật khẩu nhập lại phải giống mật khẩu',
            'ngay_sinh.*'             =>  'Ngày sinh phải là định dạng ngày tháng năm',
            'rule_id.*'               =>  'Phải chọn loại tài khoản',
        ];
    }
}
