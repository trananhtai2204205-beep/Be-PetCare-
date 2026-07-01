<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChucVuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chuc_vus')->truncate();

        DB::table('chuc_vus')->insert([

            // QUẢN TRỊ HỆ THỐNG
            [
                'id' => 1,
                'ten_chuc_vu' => 'Super Admin',
                'tinh_trang' => 1,
            ],
            [
                'id' => 2,
                'ten_chuc_vu' => 'Quản lý phòng khám',
                'tinh_trang' => 1,
            ],

            // QUẢN LÝ NGHIỆP VỤ
            [
                'id' => 3,
                'ten_chuc_vu' => 'Quản lý nhân sự',
                'tinh_trang' => 1,
            ],
            [
                'id' => 4,
                'ten_chuc_vu' => 'Quản lý bác sĩ thú y',
                'tinh_trang' => 1,
            ],
            [
                'id' => 5,
                'ten_chuc_vu' => 'Quản lý dịch vụ',
                'tinh_trang' => 1,
            ],
            [
                'id' => 6,
                'ten_chuc_vu' => 'Quản lý lịch hẹn',
                'tinh_trang' => 1,
            ],
            [
                'id' => 7,
                'ten_chuc_vu' => 'Quản lý hồ sơ thú cưng',
                'tinh_trang' => 1,
            ],
            [
                'id' => 8,
                'ten_chuc_vu' => 'Quản lý tài chính',
                'tinh_trang' => 1,
            ],

            // NHÂN VIÊN
            [
                'id' => 9,
                'ten_chuc_vu' => 'Bác sĩ thú y',
                'tinh_trang' => 1,
            ],
            [
                'id' => 10,
                'ten_chuc_vu' => 'Nhân viên lễ tân',
                'tinh_trang' => 1,
            ],
            [
                'id' => 11,
                'ten_chuc_vu' => 'Nhân viên chăm sóc thú cưng',
                'tinh_trang' => 1,
            ],
            [
                'id' => 12,
                'ten_chuc_vu' => 'Nhân viên kế toán',
                'tinh_trang' => 1,
            ],
        ]);
    }
}
