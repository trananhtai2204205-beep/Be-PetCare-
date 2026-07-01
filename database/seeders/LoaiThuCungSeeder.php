<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiThuCungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loai_thu_cungs')->truncate();
        DB::table('loai_thu_cungs')->insert([
            [
                'ten_loai' => 'Chó',
                'mo_ta' => 'Các giống chó',
                'tinh_trang' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ten_loai' => 'Mèo',
                'mo_ta' => 'Các giống mèo',
                'tinh_trang' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
