<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckIDSanPhamRequest;
use App\Http\Requests\CheckSlugSanPhamRequest;
use App\Http\Requests\CreateNhapKhoRequest;
use App\Http\Requests\CreateSanPhamRequest;
use App\Http\Requests\UpdateSanPhamRequest;
use App\Models\LoaiSanPham;
use App\Models\NhapKho;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SanPhamController extends Controller
{
    public function showSanPham($slug)
    {
        $timChuPost = strpos($slug, 'post');
        $id = Str::substr($slug, $timChuPost + 4);
        $sanPham = SanPham::where('id', $id)->first();

        return view('client.page.product_detail', compact('sanPham'));
    }

    public function index()
    {
        $loaiSP = LoaiSanPham::get();

        return view('admin_lte.pages.san_pham.index', compact('loaiSP'));
    }

    public function create(CreateSanPhamRequest $request)
    {
        $data   = $request->all();
        SanPham::create($data);
        // SanPham::create([
        //     'ten_san_pham'          => $request->ten_san_pham,
        //     'slug_san_pham'         => $request->slug_san_pham,
        //     'hinh_anh'              => $request->hinh_anh,
        //     'mo_ta_ngan'            => $request->mo_ta_ngan,
        //     'mo_ta_chi_tiet'        => $request->mo_ta_chi_tiet,
        //     'is_open'               => $request->is_open,
        //     'gia_ban'               => $request->gia_ban,
        //     'gia_khuyen_mai'        => $request->gia_khuyen_mai,
        //     'id_loai_san_pham'      => $request->id_loai_san_pham,
        // ]);

        return response()->json([
            'status'    => true,
            'mess'      => 'Đã thêm mới sản phẩm thành công!'
        ]);
    }

    public function getData()
    {
        $listSP = SanPham::get();

        return response()->json([
            'listXXX'  => $listSP,
        ]);
    }

    public function detete(CheckIDSanPhamRequest $request)
    {
        $sanPham = SanPham::where('id', $request->id)->first();
        $sanPham->delete();

        return response()->json([
            'status'    => 2,
            'mess'      => 'Đã xóa sản phẩm thành công!'
        ]);
    }

    public function update(UpdateSanPhamRequest $request)
    {
        $sanPham = SanPham::where('id', $request->id)->first();

        $sanPham->ten_san_pham          = $request->ten_san_pham;
        $sanPham->slug_san_pham         = $request->slug_san_pham;
        $sanPham->hinh_anh              = $request->hinh_anh;
        $sanPham->mo_ta_ngan            = $request->mo_ta_ngan;
        $sanPham->mo_ta_chi_tiet        = $request->mo_ta_chi_tiet;
        $sanPham->is_open               = $request->is_open;
        $sanPham->gia_ban               = $request->gia_ban;
        $sanPham->gia_khuyen_mai        = $request->gia_khuyen_mai;
        $sanPham->id_loai_san_pham      = $request->id_loai_san_pham;
        $sanPham->save();

        return response()->json([
            'status'    => 1,
            'mess'      => 'Đã cập nhật sản phẩm thành công!'
        ]);
    }

    public function edit(CheckIDSanPhamRequest $request)
    {
        $sanPham = SanPham::where('id', $request->id)->first();

        return response()->json([
            'sanPham'    => $sanPham
        ]);
    }

    public function status(CheckIDSanPhamRequest $request)
    {
        $sanPham = SanPham::where('id', $request->id)->first();
        if($sanPham->is_open == 1) {
            $sanPham->is_open = 0;
        } else {
            $sanPham->is_open = 1;
        }
        $sanPham->save();

        return response()->json([
            'status'    => 1,
            'mess'      => 'Đã đổi trạng thái thành công!'
        ]);
        // $sanPham->is_open = !$sanPham->is_open;
    }

    public function checkSlug(CheckSlugSanPhamRequest $request)
    {
        $sanPham = SanPham::where('slug_san_pham', $request->slug)->first();

        if($sanPham) {
            return response()->json([
                'status'    => 0,
                'mess'      => 'Tên sản phẩm đã tồn tại!'
            ]);
        } else {
            return response()->json([
                'status'    => 1,
                'mess'      => 'Tên sản phẩm có thể sử dụng!'
            ]);
        }
    }

    public function findName(Request $request)
    {
        // get
        $list = SanPham::where('ten_san_pham', 'like', '%' . $request->name . '%')->get();

        return response()->json([
            'danh_sach' => $list
        ]);
    }

    public function detail($id)
    {
        $sanPham = SanPham::where('id', $id)->first();

        return response()->json([
            'san_pham_xx'  => $sanPham,
        ]);
    }

    public function chart()
    {
        $data = NhapKho::where('is_nhap_kho', 1)
                        ->select('nhap_khos.ten_san_pham', DB::raw('sum(so_luong_nhap) as tong_so_luong'))
                        ->groupBy('nhap_khos.ten_san_pham')
                        ->get();

        $label = [];
        $list_data = [];
        foreach ($data as $value) {
            array_push($label, $value->ten_san_pham);
            array_push($list_data, $value->tong_so_luong);
        }

        return view('admin_lte.pages.chart.index', compact('label', 'list_data'));
    }

}
