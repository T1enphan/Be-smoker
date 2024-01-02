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
        Schema::create('thanh_viens', function (Blueprint $table) {
            $table->id();
            $table->string('ho_va_ten');
            $table->string('dia_chi');
            $table->integer('id_khoa');
            $table->string('email');
            $table->string('so_dien_thoai');
            $table->string('ngay_sinh');
            $table->string('ma_sinh_vien');
            $table->string('password');
            $table->date('ngay_dang_ky');
            $table->integer('tinh_trang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thanh_viens');
    }
};
