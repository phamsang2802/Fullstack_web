<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class KhachHang extends Authenticatable
{
    use HasFactory;

    protected $table  = 'khach_hangs';

    protected $fillable = [
        'full_name',
        'email',
        'password',
        'phone_number',
        'hash_active',
        'hash_reset',
        'is_active',
        'is_block',
        'ip',
    ];
}
