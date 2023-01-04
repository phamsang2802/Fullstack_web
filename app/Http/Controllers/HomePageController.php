<?php

namespace App\Http\Controllers;

use App\Models\LoaiSanPham;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\at;

class HomePageController extends Controller
{
    public function index()
    {
        $banner     = SanPham::where('is_open', 1)->get()->take(3);
        $loaiSP     = LoaiSanPham::where('is_open', 1)
                                 ->where('id_loai_san_pham_cha', 0)
                                 ->get();

        $topSell    = SanPham::where('is_open', 1)->get()->take(2);
        $sql = 'SELECT `san_phams`.*, B.id as `id_cha`
        FROM `san_phams` JOIN `loai_san_phams` As A on `san_phams`.`id_loai_san_pham` = A.id JOIN `loai_san_phams` as B on A.id_loai_san_pham_cha = B.id';
        $sanPham    = DB::select($sql);
        // dd($sanPham);
        return view('client.page.home', compact('banner', 'loaiSP', 'topSell', 'sanPham'));

    }

    public function Cart()
    {
        $check = Auth::guard('client')->check();
        if($check) {
            return view('client.page.cart');
        } else {
            toastr()->error('Bạn cần login trước!');
            return redirect('/login');
        }
    }

    public function productDetail()
    {
        return view('client.page.product_detail');
    }

    public function productType()
    {
        return view('client.page.product_type');
    }

    public function viewLogin()
    {
        $auth = Auth::guard('client')->check();
        if($auth) {
            toastr()->warning('Bạn đã login rồi, vô đây làm gì nữa!');
            return redirect('/');
        }
        return view('client.page.login');
    }

    public function viewRegister()
    {
        $auth = Auth::guard('client')->check();
        if($auth) {
            toastr()->warning('Bạn đã login rồi, vô đây làm gì nữa!');
            return redirect('/');
        }
        return view('client.page.register');
    }

    public function category()
    {
        return view('client.page.category');
    }
}
