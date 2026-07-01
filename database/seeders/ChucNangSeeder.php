<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChucNangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chuc_nangs')->truncate();
        DB::table('chuc_nangs')->insert([
            // QUẢN LÝ HỆ THỐNG - ID 1-3
            ['id' => 1, 'ten_chuc_nang' => 'Quản lý tài khoản quản trị'],
            ['id' => 2, 'ten_chuc_nang' => 'Quản lý chức vụ'],
            ['id' => 3, 'ten_chuc_nang' => 'Quản lý phân quyền'],

            // QUẢN LÝ NHÂN SỰ - ID 4-6
            ['id' => 4, 'ten_chuc_nang' => 'Quản lý nhân viên'],
            ['id' => 5, 'ten_chuc_nang' => 'Quản lý bác sĩ thú y'],
            ['id' => 6, 'ten_chuc_nang' => 'Quản lý khách hàng và thú cưng'],

            // QUẢN LÝ DANH MỤC - ID 7-8
            ['id' => 7, 'ten_chuc_nang' => 'Quản lý phòng khám'],
            ['id' => 8, 'ten_chuc_nang' => 'Quản lý dịch vụ khám chữa bệnh'],

            // QUẢN LÝ KHÁM CHỮA - ID 9-11
            ['id' => 9, 'ten_chuc_nang' => 'Quản lý lịch đặt khám'],
            ['id' => 10, 'ten_chuc_nang' => 'Quản lý hồ sơ khám bệnh thú cưng'],
            ['id' => 11, 'ten_chuc_nang' => 'Quản lý lịch làm việc bác sĩ thú y'],

            // THỐNG KÊ VÀ BÁO CÁO - ID 12-15
            ['id' => 12, 'ten_chuc_nang' => 'Xem thống kê tổng quan'],
            ['id' => 13, 'ten_chuc_nang' => 'Thống kê theo dịch vụ'],
            ['id' => 14, 'ten_chuc_nang' => 'Thống kê theo bác sĩ thú y'],
            ['id' => 15, 'ten_chuc_nang' => 'Thống kê doanh thu'],

            // THANH TOÁN - ID 16
            ['id' => 16, 'ten_chuc_nang' => 'Quản lý hóa đơn và thanh toán'],

            // CẤU HÌNH HỆ THỐNG - ID 17-18
            ['id' => 17, 'ten_chuc_nang' => 'Quản lý banner và tin tức'],
            ['id' => 18, 'ten_chuc_nang' => 'Cấu hình hệ thống'],
        ]);
    }
}
