<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DichVuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dich_vus')->truncate();
        DB::table('dich_vus')->insert([
            [
                'ten_dich_vu' => 'Khám tổng quát',
                'mo_ta' => 'Khám sức khỏe tổng quát cho chó và mèo.',
                'gia' => 100000,
                'thoi_gian' => 30,
                'tinh_trang' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ten_dich_vu' => 'Tiêm phòng',
                'mo_ta' => 'Tiêm vắc xin phòng bệnh cho thú cưng.',
                'gia' => 150000,
                'thoi_gian' => 20,
                'tinh_trang' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ten_dich_vu' => 'Khám nội khoa',
                'mo_ta' => 'Chẩn đoán và điều trị các bệnh nội khoa.',
                'gia' => 200000,
                'thoi_gian' => 45,
                'tinh_trang' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ten_dich_vu' => 'Phẫu thuật',
                'mo_ta' => 'Phẫu thuật điều trị các bệnh lý.',
                'gia' => 1000000,
                'thoi_gian' => 120,
                'tinh_trang' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ten_dich_vu' => 'Triệt sản',
                'mo_ta' => 'Triệt sản cho chó và mèo.',
                'gia' => 800000,
                'thoi_gian' => 90,
                'tinh_trang' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ten_dich_vu' => 'Tẩy giun',
                'mo_ta' => 'Tẩy giun định kỳ.',
                'gia' => 80000,
                'thoi_gian' => 15,
                'tinh_trang' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ten_dich_vu' => 'Khám da liễu',
                'mo_ta' => 'Điều trị các bệnh về da và lông.',
                'gia' => 180000,
                'thoi_gian' => 30,
                'tinh_trang' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ten_dich_vu' => 'Xét nghiệm',
                'mo_ta' => 'Xét nghiệm máu, nước tiểu và các mẫu bệnh phẩm.',
                'gia' => 250000,
                'thoi_gian' => 45,
                'tinh_trang' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
