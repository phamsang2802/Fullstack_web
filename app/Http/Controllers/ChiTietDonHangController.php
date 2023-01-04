<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\ChiTietDonHang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChiTietDonHangController extends Controller
{
    public function addToCart(Request $request)
    {
        $sanPham = SanPham::where('id', $request->id_san_pham)->first();
        $khachHang = Auth::guard('client')->user();
        if($sanPham && $khachHang) {
            $check = ChiTietDonHang::where('is_hoa_don', 0)
                                   ->where('id_khach_hang', $khachHang->id)
                                   ->where('id_san_pham', $request->id_san_pham)
                                   ->first();
            if($check) {
                $check->so_luong = $check->so_luong + 1;
                $check->thanh_tien =  $check->so_luong *  $check->don_gia;
                $check->save();
            } else {
                $gia_ban = $sanPham->gia_khuyen_mai != null ? $sanPham->gia_khuyen_mai : $sanPham->gia_ban;
                ChiTietDonHang::create([
                    'id_san_pham'       =>  $request->id_san_pham,
                    'id_khach_hang'     =>  $khachHang->id,
                    'don_gia'           =>  $gia_ban,
                    'so_luong'          =>  1,
                    'thanh_tien'        =>  $gia_ban * 1,
                ]);
            }

            return response()->json(['status' => 1, 'mess' => 'Đã thêm sản phẩm thành công!']);
        } else {
            return response()->json(['status' => 0, 'mess' => 'Sản phẩm không tồn tại hoặc bạn chưa login!']);
        }
    }

    public function dataCart()
    {
        $check = Auth::guard('client')->check();
        if($check) {
            $khachHang = Auth::guard('client')->user();
            $data = ChiTietDonHang::join('san_phams', 'chi_tiet_don_hangs.id_san_pham', 'san_phams.id')
                                  ->where('is_hoa_don', 0)
                                  ->where('id_khach_hang', $khachHang->id)
                                  ->select('chi_tiet_don_hangs.*', 'san_phams.ten_san_pham', 'san_phams.hinh_anh', 'san_phams.gia_ban')
                                  ->get();
            $tongTien = $data->sum('thanh_tien');
            return response()->json([
                'data'  => $data,
                'tongTien' => $tongTien,
            ]);
        }
    }

    public function updateCart(Request $request)
    {
        $check = Auth::guard('client')->check();
        if($check) {
            $khachHang = Auth::guard('client')->user();
            $chiTiet = ChiTietDonHang::where('id', $request->id)->where('id_khach_hang', $khachHang->id)->first();
            if($chiTiet) {
                $chiTiet->so_luong = $request->so_luong;
                $chiTiet->thanh_tien = $chiTiet->so_luong * $chiTiet->don_gia;
                $chiTiet->save();
                return response()->json(['status' => 1, 'mess' => 'Đã cập nhật giỏ hàng thành công!']);
            }
        }
    }

    public function deleteCart(DeleteCartRequest $request)
    {
        $check = Auth::guard('client')->check();
        if($check) {
            $khachHang = Auth::guard('client')->user();
            ChiTietDonHang::where('id', $request->id)
                          ->where('id_khach_hang', $khachHang->id) // thằng đang login yêu cầu xóa của nó
                          ->where('is_hoa_don', 0)   // nó là giỏ hàng
                          ->first()
                          ->delete();
            return response()->json(['status' => 1, 'mess' => 'Đã cập nhật giỏ hàng thành công!']);
        }
    }
}
