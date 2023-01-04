<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(DanhMucSanPhamSeeder::class);
        $this->call(SanPhamSeeder::class);
        $this->call(ChuyenMucSeeder::class);
    }
}
