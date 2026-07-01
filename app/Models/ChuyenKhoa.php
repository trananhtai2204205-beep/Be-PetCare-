<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChuyenKhoa extends Model
{
    use HasFactory;

    protected $table = 'chuyen_khoas';

    protected $fillable = [
        'ten_chuyen_khoa',
        'mo_ta',
        'tinh_trang',
    ];

}
