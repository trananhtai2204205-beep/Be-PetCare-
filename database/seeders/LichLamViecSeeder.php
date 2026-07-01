<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LichLamViecSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('lich_lam_viecs')->truncate();

        $batch = [];

        $ngayBatDau = Carbon::today()->subDays(7);
        $ngayKetThuc = Carbon::today()->addDays(30);

        $caSang = [
            'bat_dau' => '08:00:00',
            'ket_thuc' => '12:00:00'
        ];

        $caChieu = [
            'bat_dau' => '13:00:00',
            'ket_thuc' => '17:00:00'
        ];

        $caToi = [
            'bat_dau' => '18:00:00',
            'ket_thuc' => '21:00:00'
        ];

        for ($bacSi = 1; $bacSi <= 15; $bacSi++) {

            for ($ngay = $ngayBatDau->copy(); $ngay->lte($ngayKetThuc); $ngay->addDay()) {

                // Chủ nhật chỉ trực buổi sáng
                if ($ngay->dayOfWeek == Carbon::SUNDAY) {

                    $batch[] = [
                        'id_bac_si' => $bacSi,
                        'ngay_lam_viec' => $ngay->toDateString(),
                        'thoi_gian_bat_dau' => $caSang['bat_dau'],
                        'thoi_gian_ket_thuc' => $caSang['ket_thuc'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];

                } else {

                    // Ca sáng
                    $batch[] = [
                        'id_bac_si' => $bacSi,
                        'ngay_lam_viec' => $ngay->toDateString(),
                        'thoi_gian_bat_dau' => $caSang['bat_dau'],
                        'thoi_gian_ket_thuc' => $caSang['ket_thuc'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];

                    // Ca chiều
                    $batch[] = [
                        'id_bac_si' => $bacSi,
                        'ngay_lam_viec' => $ngay->toDateString(),
                        'thoi_gian_bat_dau' => $caChieu['bat_dau'],
                        'thoi_gian_ket_thuc' => $caChieu['ket_thuc'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];

                    // Chỉ bác sĩ 1-5 trực tối
                    if ($bacSi <= 5) {
                        $batch[] = [
                            'id_bac_si' => $bacSi,
                            'ngay_lam_viec' => $ngay->toDateString(),
                            'thoi_gian_bat_dau' => $caToi['bat_dau'],
                            'thoi_gian_ket_thuc' => $caToi['ket_thuc'],
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];
                    }
                }

                if (count($batch) >= 1000) {
                    DB::table('lich_lam_viecs')->insert($batch);
                    $batch = [];
                }
            }
        }

        if (!empty($batch)) {
            DB::table('lich_lam_viecs')->insert($batch);
        }
    }
}
