<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;

    protected $table = 'hoa_dons';

    protected $fillable = [
        'ma_hoa_don',
        'ten_nguoi_nhan',
        'ten_nguoi_mua',
        'email_nguoi_mua',
        'so_dien_thoai_nhan',
        'dia_chi_nhan',
        'thanh_toan',
        'tong_tien',
    ];
}
