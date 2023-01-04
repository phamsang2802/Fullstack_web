<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKhachHangRequest;
use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\LoginKhachHangRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Jobs\SendMailForgotJob;
use App\Jobs\SendMailJob;
use App\Mail\RegisterMail;
use App\Models\KhachHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class KhachHangController extends Controller
{
    public function logout()
    {
        Auth::guard('client')->logout();

        toastr()->success('Đã logout thành công!');

        return redirect('/');
    }

    public function actionRegister(CreateKhachHangRequest $request)
    {
        $data = $request->all(); // Kiểu array
        $data['password']       = bcrypt($request->password);
        $data['hash_active']    = Str::uuid();
        $data['ip']             = $request->ip();

        KhachHang::create($data);

        $data_mail['tieu_de']    = 'Chào mừng bạn đến với website chúng tôi!';
        $data_mail['link']       = env('APP_URL') . '/active/' . $data['hash_active'];
        $data_mail['full_name']  = $request->full_name;
        $data_mail['email']      = $request->email;

        for($i = 0; $i < 10; $i++) {
            // Mail::to($request->email)->send(new RegisterMail($data_mail));
            SendMailJob::dispatch($data_mail);
        }

        return response()->json([
            'status'    => true,
            'mess'      => 'Đã tạo mới tài khoản thành công!',
        ]);
    }

    public function actionLogin(LoginKhachHangRequest $request)
    {
        // $data = $request->all();
        $check = Auth::guard('client')->attempt(['email' => $request->email, 'password' => $request->password]);
        if($check) {
            // Đã dúng email + password => đã login thành công thành công!
            $khachHang = Auth::guard('client')->user(); // đã lấy được thông tin khách hàng
            if($khachHang->is_block) {
                Auth::guard('client')->logout();
                toastr()->error('Tài khoản đã bị khóa rồi!');
                return redirect('/');
            }
            if($khachHang->is_active == 0) {
                // Bắt nó bắt buộc logout
                Auth::guard('client')->logout();
                toastr()->warning('Tài khoản chưa được kích hoạt email!');
                return redirect()->back();
            }  else {
                toastr()->success('Bạn đã login thành công!');
                return redirect('/');
            }
        } else {
            toastr()->error('Tài khoản hoặc mật khẩu không đúng!');
            return redirect()->back();
        }
    }

    public function active($hash)
    {
        $khacHang = KhachHang::where('hash_active', $hash)->first();
        if($khacHang) {
            if($khacHang->is_active) {
                toastr()->warning('Tài khoản đã được kích hoạt trước đó rồi!');
            } else {
                $khacHang->is_active = 1;
                $khacHang->save();
                toastr()->success("Cảm ơn bạn đã kích hoạt tài khoản");
            }
        } else {
            toastr()->error('Liên kết không tồn tại!');
        }
        return redirect('/');
    }

    public function viewForgot()
    {
        return view('client.page.lost_pass');
    }

    public function actionForgot(ForgotPasswordRequest $request)
    {
        // Qua được tới đây là chắc chắn nó đã có email đó rồi?
        $khachHang = KhachHang::where('email', $request->email)->first();
        $ma_reset  = Str::uuid();
        $khachHang->hash_reset = $ma_reset;
        $khachHang->save();

        // Gửi cho nó cái email
        $dataMail['full_name']  = $khachHang->full_name;
        $dataMail['mail_to']    = $khachHang->email;
        $dataMail['link']       = env('APP_URL') . '/reset-password/' . $ma_reset;
        $dataMail['tieu_de']    = 'Khôi phục mật khẩu tại website xxx.xxx';

        SendMailForgotJob::dispatch($dataMail);

        toastr()->success("Vui lòng kiểm tra email!");
        return redirect('/login');
    }

    public function viewReset($hash)
    {
        // Bước 1: tìm xem hash đó có không?
        $khachHang = KhachHang::where('hash_reset', $hash)->first();
        if($khachHang) {
            Auth::guard('client')->logout();
            return view('client.page.reset_pass', compact('hash'));
        } else {
            toastr()->error('Đường dẫn không tồn tại');
            return redirect('/');
        }
    }

    public function actionReset(ResetPasswordRequest $request)
    {
        $khachHang = KhachHang::where('hash_reset', $request->hash_reset)->first();
        $khachHang->hash_reset = null;
        $khachHang->password   = bcrypt($request->password);
        $khachHang->save();

        toastr()->success("Đã đổi mật khảu thành công!");
        return redirect('/login');
    }

    public function actionChangePasss(Request $request)
    {
        $check = Auth::guard('client')->check();
        if($check) {
            $khachHang = Auth::guard('client')->user(); // vì Auth không có phương thức lưu
            $x              = KhachHang::where('id', $khachHang->id)->first();
            $x->password    = bcrypt($request->password);
            $x->save();

            toastr()->success("Đã đổi mật khẩu thành công!");

            return redirect()->back();
        }
    }

    public function viewChangePasss()
    {
        $check = Auth::guard('client')->check();
        if($check) {
            return view('client.page.change_pass');
        } else {
            toastr()->error('Vui lòng đăng nhập!');
            return redirect('/');
        }
    }
}
