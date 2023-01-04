<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $table = 'admins';

    protected $fillable = [
        'ho_va_ten',
        'email',
        'so_dien_thoai',
        'password',
        'ngay_sinh',
        'hash_reset',
        'is_block',
        'rule_id',
    ];
}
