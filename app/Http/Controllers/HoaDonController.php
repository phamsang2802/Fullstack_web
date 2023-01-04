<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHoaDonRequest;
use App\Jobs\SendMailBillJob;
use App\Models\ChiTietDonHang;
use App\Models\HoaDon;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HoaDonController extends Controller
{
    public function createBill(CreateHoaDonRequest $request)
    {
        // 1. Kiểm tra nó login hay chưa?
        $check = Auth::guard('client')->check();
        if($check) {
            $nguoi_mua = Auth::guard('client')->user();
            $hoa_don   = HoaDon::create([
                // 'ma_hoa_don', không có, vì hồi nãy thầy đã cho nullable
                'ten_nguoi_nhan'        => $request->ten_nguoi_nhan,
                'ten_nguoi_mua'         => $nguoi_mua->full_name,
                'email_nguoi_mua'       => $nguoi_mua->email,
                'so_dien_thoai_nhan'    => $request->so_dien_thoai_nhan,
                'dia_chi_nhan'          => $request->dia_chi_nhan,
                // 'thanh_toan', vì cho default = 0
                // 'tong_tien', vì lúc ni đâu biết hóa đơn mấy tiền
            ]);

            // 2. Khi ở đây là ta đã có hóa đơn rồi!.
            // ta sẽ lấy GIỎ HÀNG (IS_HOA_DON = 0) của thằng đang login
            $gio_hang   = ChiTietDonHang::where('is_hoa_don', 0)->where('id_khach_hang', $nguoi_mua->id)->get();
            $sanPham    = ChiTietDonHang::join('san_phams', 'chi_tiet_don_hangs.id_san_pham', 'san_phams.id')
                                        ->select('chi_tiet_don_hangs.*', 'san_phams.ten_san_pham', 'san_phams.hinh_anh')
                                        ->get();
            if(count($gio_hang) <= 0) {
                $hoa_don->delete();
                return response()->json(['status' => 0, 'mess' => 'Giỏ hàng đã bị trống!']);
            }
            $tong_tien = 0;
            foreach($gio_hang as $key => $value) {
                $value->is_hoa_don = 1;
                $value->id_hoa_don = $hoa_don->id;
                $value->save();
                $tong_tien = $tong_tien + $value->thanh_tien;
            }

            $hoa_don->tong_tien  = $tong_tien; // Bây giờ ta mới biết nó có mấy tiền mà cập nhật
            $hoa_don->ma_hoa_don = 'DHLARAVEL' . (417896 + $hoa_don->id);
            $hoa_don->save();

            // Gửi email
            $data['tieu_de']                = "Xác nhận đặt hàng tại website";
            $data['email']                  = $nguoi_mua->email;
            $data['ten_nguoi_mua']          = $hoa_don->ten_nguoi_mua;
            $data['dia_chi_nhan']           = $hoa_don->dia_chi_nhan;
            $data['so_dien_thoai_nhan']     = $hoa_don->so_dien_thoai_nhan;
            $data['tong_tien']              = $hoa_don->tong_tien;
            $data['ma_hoa_don']             = $hoa_don->ma_hoa_don;

            SendMailBillJob::dispatch($data, $sanPham);

            return response()->json(['status' => 1, 'mess' => 'Đã tạo đơn hàng thành công!']);
        } else {
            return response()->json(['status' => 0, 'mess' => 'Bạn phải đăng nhập!']);
        }
    }
}
