<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            BacSiChuyenNganhSeeder::class,
            BacSiSeeder::class,
            LeTanSeeder::class,
            PhieuDatLichSeeder::class,
            ChiTietDatLichSeeder::class,
            ChuyenKhoaSeeder::class,
            PhongKhamSeeder::class,
            LichLamViecSeeder::class,
            PhanQuyenSeeder::class,
            ChucNangSeeder::class,
            ChucVuSeeder::class,
            DichVuSeeder::class,
            LoaiThuCungSeeder::class,


        ]);
    }
}
