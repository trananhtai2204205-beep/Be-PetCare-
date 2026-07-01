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
        Schema::create('le_tans', function (Blueprint $table) {
            $table->id();
            $table->string('ho_ten');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('hinh_anh')->nullable();
            $table->string('so_dien_thoai')->nullable();
            $table->date('ngay_sinh')->nullable();
            $table->integer('gioi_tinh')->default(0)->comment('0: Nam, 1: Nữ, 2: Khác');
            $table->string('dia_chi')->nullable();

            // Thông tin nhân viên
            $table->string('ma_le_tan')->unique()->nullable();
            $table->date('ngay_vao_lam')->nullable();

            // Quản lý tài khoản
            $table->string('hash_reset')->nullable();
            $table->string('hash_active')->nullable();
            $table->integer('is_active')->default(0)->comment('0: Chưa kích hoạt, 1: Đã kích hoạt');
            $table->integer('is_block')->default(0)->comment('0: Hoạt động, 1: Khóa');
            $table->integer('tinh_trang')->default(1)->comment('1: Đang làm, 0: Nghỉ việc');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('le_tans');
    }
};
