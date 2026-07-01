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
        Schema::create('loai_thu_cungs', function (Blueprint $table) {
            $table->id();
            $table->string('ten_loai', 100);
            $table->text('mo_ta')->nullable();
            $table->integer('tinh_trang')->default(1)->comment('0: tat, 1: hoatdong,');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loai_thu_cungs');
    }
};
