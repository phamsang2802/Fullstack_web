<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMucSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loai_san_phams')->delete();

        DB::table('loai_san_phams')->truncate();

        DB::table('loai_san_phams')->insert([
            ['ten_loai_san_pham' => 'Điện thoại', 'slug_loai_san_pham' => 'dien-thoai', 'id_loai_san_pham_cha' => 0, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Laptop', 'slug_loai_san_pham' => 'laptop', 'id_loai_san_pham_cha' => 0, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Bàn phím', 'slug_loai_san_pham' => 'ban-phim', 'id_loai_san_pham_cha' => 0, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Đồng hồ', 'slug_loai_san_pham' => 'dong-ho', 'id_loai_san_pham_cha' => 0, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Tai nghe', 'slug_loai_san_pham' => 'tai-nghe', 'id_loai_san_pham_cha' => 0, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Điện thoại Apple', 'slug_loai_san_pham' => 'dien-thoai-apple', 'id_loai_san_pham_cha' => 1, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Điện thoại SamSung', 'slug_loai_san_pham' => 'dien-thoai-samsung', 'id_loai_san_pham_cha' => 1, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Laptop Asus', 'slug_loai_san_pham' => 'laptop-asus', 'id_loai_san_pham_cha' => 2, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Laptop Dell', 'slug_loai_san_pham' => 'laptop-dell', 'id_loai_san_pham_cha' => 2, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Bàn phím Akko', 'slug_loai_san_pham' => 'ban-phim-akko', 'id_loai_san_pham_cha' => 3, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Bàn phím Razer', 'slug_loai_san_pham' => 'ban-phim-razer', 'id_loai_san_pham_cha' => 3, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Đồng hồ Xiaomi', 'slug_loai_san_pham' => 'dong-ho-xiaomi', 'id_loai_san_pham_cha' => 4, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Đồng hồ Apple', 'slug_loai_san_pham' => 'dong-ho-apple', 'id_loai_san_pham_cha' => 4, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Tai nghe Sony', 'slug_loai_san_pham' => 'tai-nghe-sony', 'id_loai_san_pham_cha' => 5, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Tai nghe SamSung', 'slug_loai_san_pham' => 'tai-nghe-samsung', 'id_loai_san_pham_cha' => 5, 'is_open' => 1],
        ]);
    }
}
