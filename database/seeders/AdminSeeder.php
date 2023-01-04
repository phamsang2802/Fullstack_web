<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->delete();

        DB::table('admins')->truncate();

        DB::table('admins')->insert([
            ['ho_va_ten' => 'Admin Master', 'email' => 'admin@master.com', 'so_dien_thoai' => '0322226669', 'password' => bcrypt(123456789), 'ngay_sinh' => '2022-01-01' , 'hash_reset' => '', 'is_block' => 0 , 'rule_id' => 0],
        ]);
    }
}
