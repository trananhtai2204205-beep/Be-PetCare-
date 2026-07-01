<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhanQuyenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('phan_quyens')->truncate();

        // 1. SUPER ADMIN - Toàn quyền hệ thống
        DB::table('phan_quyens')->insert([
            ['id_chuc_vu' => 1, 'id_chuc_nang' => 1],   // Quản lý tài khoản Admin
            ['id_chuc_vu' => 1, 'id_chuc_nang' => 2],   // Quản lý chức vụ
            ['id_chuc_vu' => 1, 'id_chuc_nang' => 3],   // Quản lý phân quyền
            ['id_chuc_vu' => 1, 'id_chuc_nang' => 4],   // Quản lý nhân viên
            ['id_chuc_vu' => 1, 'id_chuc_nang' => 5],   // Quản lý bác sĩ thú y
            ['id_chuc_vu' => 1, 'id_chuc_nang' => 6],   // Quản lý khách hàng & thú cưng
            ['id_chuc_vu' => 1, 'id_chuc_nang' => 7],   // Quản lý dịch vụ thú y
            ['id_chuc_vu' => 1, 'id_chuc_nang' => 8],   // Quản lý chuyên khoa thú y
            ['id_chuc_vu' => 1, 'id_chuc_nang' => 9],   // Quản lý lịch hẹn
            ['id_chuc_vu' => 1, 'id_chuc_nang' => 10],  // Quản lý hồ sơ khám bệnh
            ['id_chuc_vu' => 1, 'id_chuc_nang' => 11],  // Quản lý lịch làm việc
            ['id_chuc_vu' => 1, 'id_chuc_nang' => 12],  // Xem thống kê tổng quan
            ['id_chuc_vu' => 1, 'id_chuc_nang' => 13],  // Xem thống kê dịch vụ
            ['id_chuc_vu' => 1, 'id_chuc_nang' => 14],  // Xem thống kê bác sĩ
            ['id_chuc_vu' => 1, 'id_chuc_nang' => 15],  // Xem thống kê doanh thu
            ['id_chuc_vu' => 1, 'id_chuc_nang' => 16],  // Quản lý thanh toán
            ['id_chuc_vu' => 1, 'id_chuc_nang' => 17],  // Quản lý banner
            ['id_chuc_vu' => 1, 'id_chuc_nang' => 18],  // Cấu hình hệ thống
        ]);

        // 2. QUẢN LÝ PETCARE - Quản lý toàn bộ nghiệp vụ
        DB::table('phan_quyens')->insert([
            ['id_chuc_vu' => 2, 'id_chuc_nang' => 4],   // Quản lý nhân viên
            ['id_chuc_vu' => 2, 'id_chuc_nang' => 5],   // Quản lý bác sĩ thú y
            ['id_chuc_vu' => 2, 'id_chuc_nang' => 6],   // Quản lý khách hàng & thú cưng
            ['id_chuc_vu' => 2, 'id_chuc_nang' => 7],   // Quản lý dịch vụ thú y
            ['id_chuc_vu' => 2, 'id_chuc_nang' => 8],   // Quản lý chuyên khoa thú y
            ['id_chuc_vu' => 2, 'id_chuc_nang' => 9],   // Quản lý lịch hẹn
            ['id_chuc_vu' => 2, 'id_chuc_nang' => 10],  // Quản lý hồ sơ khám bệnh
            ['id_chuc_vu' => 2, 'id_chuc_nang' => 11],  // Quản lý lịch làm việc
            ['id_chuc_vu' => 2, 'id_chuc_nang' => 12],  // Xem thống kê tổng quan
            ['id_chuc_vu' => 2, 'id_chuc_nang' => 13],  // Xem thống kê dịch vụ
            ['id_chuc_vu' => 2, 'id_chuc_nang' => 14],  // Xem thống kê bác sĩ
            ['id_chuc_vu' => 2, 'id_chuc_nang' => 15],  // Xem thống kê doanh thu
            ['id_chuc_vu' => 2, 'id_chuc_nang' => 16],  // Quản lý thanh toán
            ['id_chuc_vu' => 2, 'id_chuc_nang' => 17],  // Quản lý banner
        ]);

        // 3. QUẢN LÝ NHÂN SỰ - Quản lý nhân viên và bác sĩ thú y
        DB::table('phan_quyens')->insert([
            ['id_chuc_vu' => 3, 'id_chuc_nang' => 4],   // Quản lý nhân viên
            ['id_chuc_vu' => 3, 'id_chuc_nang' => 5],   // Quản lý bác sĩ thú y
            ['id_chuc_vu' => 3, 'id_chuc_nang' => 12],  // Xem thống kê tổng quan
            ['id_chuc_vu' => 3, 'id_chuc_nang' => 14],  // Xem thống kê bác sĩ
        ]);

        // 4. QUẢN LÝ DỊCH VỤ - Quản lý dịch vụ thú y
        DB::table('phan_quyens')->insert([
            ['id_chuc_vu' => 4, 'id_chuc_nang' => 7],   // Quản lý dịch vụ thú y
            ['id_chuc_vu' => 4, 'id_chuc_nang' => 8],   // Quản lý chuyên khoa thú y
            ['id_chuc_vu' => 4, 'id_chuc_nang' => 12],  // Xem thống kê tổng quan
            ['id_chuc_vu' => 4, 'id_chuc_nang' => 13],  // Xem thống kê dịch vụ
        ]);

        // 5. QUẢN LÝ KHO THUỐC - Quản lý thuốc và vật tư
        DB::table('phan_quyens')->insert([
            ['id_chuc_vu' => 5, 'id_chuc_nang' => 7],   // Quản lý dịch vụ thú y
            ['id_chuc_vu' => 5, 'id_chuc_nang' => 12],  // Xem thống kê tổng quan
        ]);

        // 6. ĐIỀU PHỐI LỊCH HẸN - Quản lý lịch hẹn và lịch làm việc
        DB::table('phan_quyens')->insert([
            ['id_chuc_vu' => 6, 'id_chuc_nang' => 9],   // Quản lý lịch hẹn
            ['id_chuc_vu' => 6, 'id_chuc_nang' => 11],  // Quản lý lịch làm việc
            ['id_chuc_vu' => 6, 'id_chuc_nang' => 12],  // Xem thống kê tổng quan
            ['id_chuc_vu' => 6, 'id_chuc_nang' => 14],  // Xem thống kê bác sĩ
        ]);

        // 7. BÁC SĨ THÚ Y TRƯỞNG - Quản lý hồ sơ khám bệnh
        DB::table('phan_quyens')->insert([
            ['id_chuc_vu' => 7, 'id_chuc_nang' => 10],  // Quản lý hồ sơ khám bệnh
            ['id_chuc_vu' => 7, 'id_chuc_nang' => 11],  // Quản lý lịch làm việc
            ['id_chuc_vu' => 7, 'id_chuc_nang' => 12],  // Xem thống kê tổng quan
            ['id_chuc_vu' => 7, 'id_chuc_nang' => 14],  // Xem thống kê bác sĩ
        ]);

        // 8. QUẢN LÝ TÀI CHÍNH - Quản lý thanh toán và doanh thu
        DB::table('phan_quyens')->insert([
            ['id_chuc_vu' => 8, 'id_chuc_nang' => 16],  // Quản lý thanh toán
            ['id_chuc_vu' => 8, 'id_chuc_nang' => 12],  // Xem thống kê tổng quan
            ['id_chuc_vu' => 8, 'id_chuc_nang' => 15],  // Xem thống kê doanh thu
        ]);

        // 9. NHÂN VIÊN LỄ TÂN - Quản lý khách hàng và lịch hẹn
        DB::table('phan_quyens')->insert([
            ['id_chuc_vu' => 9, 'id_chuc_nang' => 6],   // Quản lý khách hàng & thú cưng
            ['id_chuc_vu' => 9, 'id_chuc_nang' => 9],   // Quản lý lịch hẹn
            ['id_chuc_vu' => 9, 'id_chuc_nang' => 12],  // Xem thống kê tổng quan
        ]);

        // 10. BÁC SĨ THÚ Y - Khám và điều trị
        DB::table('phan_quyens')->insert([
            ['id_chuc_vu' => 10, 'id_chuc_nang' => 9],   // Xem lịch hẹn
            ['id_chuc_vu' => 10, 'id_chuc_nang' => 10],  // Quản lý hồ sơ khám bệnh
            ['id_chuc_vu' => 10, 'id_chuc_nang' => 11],  // Xem lịch làm việc
        ]);

        // 11. NHÂN VIÊN KẾ TOÁN - Thanh toán
        DB::table('phan_quyens')->insert([
            ['id_chuc_vu' => 11, 'id_chuc_nang' => 16], // Quản lý thanh toán
            ['id_chuc_vu' => 11, 'id_chuc_nang' => 15], // Xem thống kê doanh thu
        ]);

        // 12. NHÂN VIÊN MARKETING / IT - Banner và cấu hình
        DB::table('phan_quyens')->insert([
            ['id_chuc_vu' => 12, 'id_chuc_nang' => 17], // Quản lý banner
            ['id_chuc_vu' => 12, 'id_chuc_nang' => 18], // Cấu hình hệ thống
            ['id_chuc_vu' => 12, 'id_chuc_nang' => 12], // Xem thống kê tổng quan
        ]);
    }
}
