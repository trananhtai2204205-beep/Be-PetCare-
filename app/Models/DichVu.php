<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DichVu extends Model
{
    use HasFactory;

    protected $table = 'dich_vus';

    protected $fillable = [
        'ten_dich_vu',
        'mo_ta',
        'gia',
        'thoi_gian',
        'tinh_trang',
    ];
}
