<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BaiVietController;
use App\Http\Controllers\ChiTietDonHangController;
use App\Http\Controllers\ChuyenMucController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\LoaiSanPhamController;
use App\Http\Controllers\NhapKhoController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\TestController;
use App\Models\KhachHang;
use Illuminate\Support\Facades\Route;

Route::get('/test', [TestController::class, 'index']);
Route::get('/', [HomePageController::class, 'index']);
Route::get('/forgot-password', [KhachHangController::class, 'viewForgot']);
Route::post('/forgot-password', [KhachHangController::class, 'actionForgot']);

Route::get('/logout', [KhachHangController::class, 'logout']);

Route::get('/change-password', [KhachHangController::class, 'viewChangePasss']);
Route::post('/change-password', [KhachHangController::class, 'actionChangePasss']);

Route::get('/reset-password/{hash}', [KhachHangController::class, 'viewReset']);
Route::post('/reset-password', [KhachHangController::class, 'actionReset']);

Route::get('/category', [HomePageController::class, 'category']);
Route::get('/cart', [HomePageController::class, 'Cart']);
Route::get('/cart/data', [ChiTietDonHangController::class, 'dataCart']);
Route::post('/cart/delete', [ChiTietDonHangController::class, 'deleteCart']);
Route::get('/product-detail', [HomePageController::class, 'productDetail']);
Route::get('/product-type', [HomePageController::class, 'productType']);
Route::get('/login', [HomePageController::class, 'viewLogin']);
Route::post('/login', [KhachHangController::class, 'actionLogin']);

Route::post('/add-to-cart', [ChiTietDonHangController::class, 'addToCart']);
Route::post('/cart/update', [ChiTietDonHangController::class, 'updateCart']);

Route::post('/create-bill', [HoaDonController::class, 'createBill']);

Route::get('/active/{hash}', [KhachHangController::class, 'active']);

Route::get('/register', [HomePageController::class, 'viewRegister']);
Route::post('/register', [KhachHangController::class, 'actionRegister']);

Route::get('/san-pham/{slug}', [SanPhamController::class, 'showSanPham']);

Route::post('/admin-lte/login', [AdminController::class, 'actionLogin']);
Route::get('/admin-lte/login', [AdminController::class, 'viewLogin']);

Route::group(['prefix' => '/admin-lte', 'middleware' => 'admin'], function() {
// Route::group(['prefix' => '/admin-lte'], function() {
    Route::group(['prefix' => '/loai-san-pham'], function() {
        Route::get('/index', [LoaiSanPhamController::class, 'index']);
        Route::get('/data', [LoaiSanPhamController::class, 'getData']);

        Route::post('/create', [LoaiSanPhamController::class, 'create']);
        Route::post('/delete', [LoaiSanPhamController::class, 'delete']);
        Route::post('/update', [LoaiSanPhamController::class, 'update']);
        Route::post('/edit', [LoaiSanPhamController::class, 'edit']);
    });
    Route::group(['prefix' => '/chuyen-muc'], function() {
        Route::get('/index', [ChuyenMucController::class, 'index']);
        Route::get('/data', [ChuyenMucController::class, 'getData']);
        Route::post('/create', [ChuyenMucController::class, 'create']);
    });
    Route::group(['prefix' => '/san-pham'], function() {
        Route::get('/index', [SanPhamController::class, 'index']);
        Route::get('/data', [SanPhamController::class, 'getData']);

        Route::post('/create', [SanPhamController::class, 'create']);
        Route::post('/delete', [SanPhamController::class, 'detete']);
        Route::post('/update', [SanPhamController::class, 'update']);
        Route::post('/edit', [SanPhamController::class, 'edit']);
        Route::post('/status', [SanPhamController::class, 'status']);
        Route::post('/check-slug', [SanPhamController::class, 'checkSlug']);
        Route::post('/find-name', [SanPhamController::class, 'findName']);

        Route::get('/detail/{id}', [SanPhamController::class, 'detail']);
    });
    Route::group(['prefix' => '/nhap-kho'], function() {
        Route::get('/index', [NhapKhoController::class, 'index']);
        Route::get('/list', [NhapKhoController::class, 'list']);
        Route::get('/data', [NhapKhoController::class, 'getData']);

        Route::post('/create', [NhapKhoController::class, 'create']);
        Route::post('/delete', [NhapKhoController::class, 'delete']);
        Route::post('/update', [NhapKhoController::class, 'update']);

        Route::get('/create', [NhapKhoController::class, 'store']);
        Route::post('/detail', [NhapKhoController::class, 'detail']);

    });

    Route::group(['prefix' => '/chuyen-muc'], function() {
        Route::get('/index', [ChuyenMucController::class, 'index']);
        Route::get('/data', [ChuyenMucController::class, 'getData']);

        Route::post('/create', [ChuyenMucController::class, 'create']);
        Route::post('/delete', [ChuyenMucController::class, 'delete']);
        Route::post('/update', [ChuyenMucController::class, 'update']);
    });

    Route::group(['prefix' => '/bai-viet'], function() {
        Route::get('/index', [BaiVietController::class, 'index']);

        Route::get('/data', [BaiVietController::class, 'data']);
        Route::post('/create', [BaiVietController::class, 'create']);

        Route::post('/status', [BaiVietController::class, 'status']); // Đổi Trạng Thái Của Bài Viết
        Route::post('/check-slug', [BaiVietController::class, 'checkSlug']); // Kiểm Tra Xem Bài Viết Có Chưa???
        Route::post('/delete', [BaiVietController::class, 'delete']);
        Route::post('/update', [BaiVietController::class, 'update']);
    });

    Route::group(['prefix' => '/tai-khoan'], function() {
        Route::get('/index', [AdminController::class, 'index']);
        Route::get('/data', [AdminController::class, 'data']);

        Route::post('/create', [AdminController::class, 'create']);
        Route::post('/change-status', [AdminController::class, 'status']);
        Route::post('/update', [AdminController::class, 'update']);

    });
    Route::group(['prefix' => '/thong-ke'], function() {
        Route::get('/chart', [SanPhamController::class, 'chart']);
    });
});
Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
