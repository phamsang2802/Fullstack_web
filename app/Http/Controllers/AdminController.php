<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaiKhoanAdminRequest;
use App\Http\Requests\updateTaiKhoanAdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin_lte.pages.tai_khoan.index');
    }

    public function data()
    {
        $data = Admin::get();

        return response()->json([
            'tai_khoan' => $data,
        ]);
    }

    public function create(CreateTaiKhoanAdminRequest $request)
    {
        $data               = $request->all();
        $data['password']   = bcrypt($request->password);
        Admin::create($data);

        return response()->json([
            'status'    => 1,
            'mess'      => 'Đã tạo tài khoản thành công!',
        ]);
    }

    public function status(Request $request)
    {
        $admin = Admin::where('id', $request->id)->first();

        if($admin) {
            $admin->is_block = !$admin->is_block;
            $admin->save();

            return response()->json([
                'status'    => 1,
                'mess'      => 'Đã đổi trạng thái tài khoản ' . $admin->ho_va_ten,
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'mess'      => 'Quậy vừa vừa thôi',
            ]);
        }
    }

    public function update(updateTaiKhoanAdminRequest $request)
    {
        // $admin = Admin::where('id', $request->id)->first();
        $admin = Admin::find($request->id);

        $admin->update($request->all());

        return response()->json([
            'status'    => 1,
            'mess'      => 'Đã cập nhật tài khoản ' . $admin->email,
        ]);
    }

    public function viewLogin()
    {
        return view('admin_lte.pages.auth.login');
    }

    public function actionLogin(Request $request)
    {
        $data  = $request->all();
        $check = Auth::guard('admin')->attempt($data);
        if($check) {
            return response()->json([
                'status'    => true,
                'mess'      => 'Đã login thành công!',
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'mess'      => 'Tài khoản hoặc mật khẩu không đúng!',
            ]);
        }
    }
}
