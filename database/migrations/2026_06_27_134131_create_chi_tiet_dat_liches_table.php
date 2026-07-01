<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chi_tiet_dat_liches', function (Blueprint $table) {
            $table->id();
            $table->integer('id_phieu_dat_lich');
            $table->integer('id_bac_si');
            $table->integer('id_thu_cung');
            $table->string('ten_chu_nuoi');
            $table->string('id_chuyen_khoa');
            $table->string('id_loai_thu_cung');
            $table->string('id_dich_vu');
            $table->string('dia_chi');
            $table->string('email');
            $table->string('so_dien_thoai', 20);
            $table->dateTime('thoi_gian_bat_dau')->nullable();
            $table->dateTime('thoi_gian_ket_thuc')->nullable();
            $table->integer('so_sao_danh_gia')->nullable();
            $table->string('don_thuoc')->nullable();
            $table->string('chuan_doan')->nullable();
            $table->string('ghi_chu')->nullable();
            $table->integer('don_gia_kham')->default(0);
            $table->dateTime('thoi_gian_ket_thuc_kham')->nullable();
            $table->string('trieu_chung')->nullable();
            $table->date('ngay_danh_gia')->nullable();
            $table->integer('tinh_trang')->default(0)->comment('0: ChoXacNhan, 1: DaXacNhan, 2: DangKham, 3:HoanThanh, 4:DaHuy');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_dat_liches');
    }
};
