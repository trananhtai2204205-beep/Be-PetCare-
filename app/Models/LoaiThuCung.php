<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiThuCung extends Model
{
    use HasFactory;

    protected $table = 'loai_thu_cungs';

    protected $fillable = [
        'ten_loai',
        'mo_ta',
        'tinh_trang',
    ];
}
