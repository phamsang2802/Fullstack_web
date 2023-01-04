<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBaiVietRequest;
use App\Models\BaiViet;
use App\Models\ChuyenMuc;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    public function index()
    {
        $chuyenMuc = ChuyenMuc::where('is_open', 1)->get();

        return view('admin_lte.pages.bai_viet.index', compact('chuyenMuc'));
    }

    public function create(CreateBaiVietRequest $request)
    {
        $data = $request->all();

        BaiViet::create($data);

        return response()->json([
            'status'    => true,
            'mess'      => 'Đã thêm mới bài viết thành công!',
        ]);
    }

    public function data()
    {
        $danhSachBaiViet = BaiViet::get(); // BaiViet::all();

        return response()->json([
            'danhSachBaiViet'   => $danhSachBaiViet,
        ]);
    }
}

