<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class LeTan extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'le_tans';

    protected $fillable = [
        'ho_ten',
        'email',
        'password',
        'hinh_anh',
        'so_dien_thoai',
        'ngay_sinh',
        'gioi_tinh',
        'dia_chi',
        'ma_le_tan',
        'ngay_vao_lam',
        'tinh_trang',
        'is_active',
        'is_block',
        'hash_reset',
        'hash_active',
    ];

    protected $hidden = [
        'password',
        'hash_reset',
        'hash_active',
    ];

    protected $casts = [
        'ngay_sinh' => 'date',
        'ngay_vao_lam' => 'date',
    ];
}
