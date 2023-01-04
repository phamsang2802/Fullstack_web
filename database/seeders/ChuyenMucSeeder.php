<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChuyenMucSeeder extends Seeder
{
    public function run()
    {
        // Xóa toàn bộ dữ liệu ở table Chuyên Mục
        DB::table('chuyen_mucs')->delete();
        // Muốn id được đánh số lại từ 1
        DB::table('chuyen_mucs')->truncate();

        DB::table('chuyen_mucs')->insert([
            ['ten_chuyen_muc' => 'An Sinh', 'slug_chuyen_muc' => 'an-sinh', 'is_open' => 1],
            ['ten_chuyen_muc' => 'Xã Hội', 'slug_chuyen_muc' => 'xa-hoi', 'is_open' => 1],
            ['ten_chuyen_muc' => 'Giáo Dục', 'slug_chuyen_muc' => 'giao-duc', 'is_open' => 1],
            ['ten_chuyen_muc' => 'An Ninh', 'slug_chuyen_muc' => 'an-ninh', 'is_open' => 1],
        ]);
    }
}
