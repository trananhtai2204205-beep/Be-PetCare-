<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->truncate();
        DB::table('admins')->insert([
            [
                'id' => 1,
                'ho_ten' => 'Trần Anh Tài',
                'email' => 'trananhtai2204205@gmail.com',
                'password' => bcrypt('123456'),
                'so_dien_thoai' => '0935980348',
                'hinh_anh' => 'https://dzfullstack.com/logo.png',
                'id_chuc_vu' => 1,
                'tinh_trang' => 1,
            ],
            [
                'id' => 2,
                'ho_ten' => 'Smile',
                'email' => 'smile@gmail.com',
                'password' => bcrypt('123456'),
                'so_dien_thoai' => '0396540187',
                'hinh_anh' => 'https://dzfullstack.com/logo.png',
                'id_chuc_vu' => 2,
                'tinh_trang' => 1,
            ],
            // THÊM 8 ADMIN CHO CÁC CHỨC VỤ 5-12
            [
                'id' => 5,
                'ho_ten' => 'Trần Anh A',
                'email' => 'trananha@gmail.com',
                'password' => bcrypt('123456'),
                'so_dien_thoai' => '0912345605',
                'hinh_anh' => 'https://dzfullstack.com/logo.png',
                'id_chuc_vu' => 5, // Quản lý chuyên khoa
                'tinh_trang' => 1,
            ],
            [
                'id' => 6,
                'ho_ten' => 'Trần Anh B',
                'email' => 'trananhb@gmail.com',
                'password' => bcrypt('123456'),
                'so_dien_thoai' => '0912345606',
                'hinh_anh' => 'https://dzfullstack.com/logo.png',
                'id_chuc_vu' => 6, // Quản lý lịch hẹn
                'tinh_trang' => 1,
            ],
            [
                'id' => 7,
                'ho_ten' => 'Trần Anh C',
                'email' => 'trananhc@gmail.com',
                'password' => bcrypt('123456'),
                'so_dien_thoai' => '0912345607',
                'hinh_anh' => 'https://dzfullstack.com/logo.png',
                'id_chuc_vu' => 7, // Quản lý hồ sơ bệnh án
                'tinh_trang' => 1,
            ],
            [
                'id' => 8,
                'ho_ten' => 'Trần Anh D',
                'email' => 'trananhd@gmail.com',
                'password' => bcrypt('123456'),
                'so_dien_thoai' => '0912345608',
                'hinh_anh' => 'https://dzfullstack.com/logo.png',
                'id_chuc_vu' => 8, // Quản lý tài chính
                'tinh_trang' => 1,
            ],
            [
                'id' => 9,
                'ho_ten' => 'Trần Anh E',
                'email' => 'trananhe@gmail.com',
                'password' => bcrypt('123456'),
                'so_dien_thoai' => '0912345609',
                'hinh_anh' => 'https://dzfullstack.com/logo.png',
                'id_chuc_vu' => 9, // Nhân viên lễ tân
                'tinh_trang' => 1,
            ],
            [
                'id' => 10,
                'ho_ten' => 'Trần Anh F',
                'email' => 'trananhf@gmail.com',
                'password' => bcrypt('123456'),
                'so_dien_thoai' => '0912345610',
                'hinh_anh' => 'https://dzfullstack.com/logo.png',
                'id_chuc_vu' => 10, // Nhân viên y tế
                'tinh_trang' => 1,
            ],
            [
                'id' => 11,
                'ho_ten' => 'Trần Anh G',
                'email' => 'trananhg@gmail.com',
                'password' => bcrypt('123456'),
                'so_dien_thoai' => '0912345611',
                'hinh_anh' => 'https://dzfullstack.com/logo.png',
                'id_chuc_vu' => 11, // Nhân viên kế toán
                'tinh_trang' => 1,
            ],
            [
                'id' => 12,
                'ho_ten' => 'Trần Anh H',
                'email' => 'trananhh@gmail.com',
                'password' => bcrypt('123456'),
                'so_dien_thoai' => '0912345612',
                'hinh_anh' => 'https://dzfullstack.com/logo.png',
                'id_chuc_vu' => 12, // Nhân viên hỗ trợ kỹ thuật
                'tinh_trang' => 1,
            ],
             [
                'id' => 13,
                'ho_ten' => 'Trần Anh H',
                'email' => 'trananhhtai@gmail.com',
                'password' => '123456',
                'so_dien_thoai' => '0912345612',
                'hinh_anh' => 'https://dzfullstack.com/logo.png',
                'id_chuc_vu' => 13, // Nhân viên hỗ trợ kỹ thuật
                'tinh_trang' => 1,
            ],
        ]);
    }
}
