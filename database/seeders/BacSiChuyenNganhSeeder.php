<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BacSiChuyenNganhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bac_si_chuyen_nganhs')->truncate();

        DB::table('bac_si_chuyen_nganhs')->insert([
            [
                'id' => 1,
                'id_bac_si' => 1,
                'id_chuyen_khoa' => 1, // Khám tổng quát thú cưng
                'thoi_gian_du_kien' => '2025-07-01 08:00:00',
            ],
            [
                'id' => 2,
                'id_bac_si' => 2,
                'id_chuyen_khoa' => 2, // Nội khoa thú y
                'thoi_gian_du_kien' => '2025-07-01 09:00:00',
            ],
            [
                'id' => 3,
                'id_bac_si' => 3,
                'id_chuyen_khoa' => 3, // Ngoại khoa thú y
                'thoi_gian_du_kien' => '2025-07-01 10:00:00',
            ],
            [
                'id' => 4,
                'id_bac_si' => 4,
                'id_chuyen_khoa' => 4, // Da liễu thú y
                'thoi_gian_du_kien' => '2025-07-01 11:00:00',
            ],
            [
                'id' => 5,
                'id_bac_si' => 5,
                'id_chuyen_khoa' => 5, // Nha khoa thú y
                'thoi_gian_du_kien' => '2025-07-01 13:00:00',
            ],
            [
                'id' => 6,
                'id_bac_si' => 6,
                'id_chuyen_khoa' => 6, // Chẩn đoán hình ảnh
                'thoi_gian_du_kien' => '2025-07-01 14:00:00',
            ],
            [
                'id' => 7,
                'id_bac_si' => 7,
                'id_chuyen_khoa' => 7, // Tim mạch thú y
                'thoi_gian_du_kien' => '2025-07-01 15:00:00',
            ],
            [
                'id' => 8,
                'id_bac_si' => 8,
                'id_chuyen_khoa' => 8, // Sản khoa thú y
                'thoi_gian_du_kien' => '2025-07-02 08:00:00',
            ],
            [
                'id' => 9,
                'id_bac_si' => 9,
                'id_chuyen_khoa' => 9, // Tiêm phòng
                'thoi_gian_du_kien' => '2025-07-02 09:00:00',
            ],
            [
                'id' => 10,
                'id_bac_si' => 10,
                'id_chuyen_khoa' => 10, // Ký sinh trùng
                'thoi_gian_du_kien' => '2025-07-02 10:00:00',
            ],
            [
                'id' => 11,
                'id_bac_si' => 11,
                'id_chuyen_khoa' => 11, // Dinh dưỡng thú cưng
                'thoi_gian_du_kien' => '2025-07-02 11:00:00',
            ],
            [
                'id' => 12,
                'id_bac_si' => 12,
                'id_chuyen_khoa' => 12, // Chăm sóc sức khỏe định kỳ
                'thoi_gian_du_kien' => '2025-07-02 13:00:00',
            ],
            [
                'id' => 13,
                'id_bac_si' => 13,
                'id_chuyen_khoa' => 13, // Cấp cứu thú y
                'thoi_gian_du_kien' => '2025-07-02 14:00:00',
            ],
            [
                'id' => 14,
                'id_bac_si' => 14,
                'id_chuyen_khoa' => 14, // Xét nghiệm
                'thoi_gian_du_kien' => '2025-07-02 15:00:00',
            ],
            [
                'id' => 15,
                'id_bac_si' => 15,
                'id_chuyen_khoa' => 15, // Chăm sóc và làm đẹp thú cưng
                'thoi_gian_du_kien' => '2025-07-02 16:00:00',
            ],
        ]);
    }
}
