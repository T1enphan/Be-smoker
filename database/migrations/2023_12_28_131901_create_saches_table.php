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
        Schema::create('saches', function (Blueprint $table) {
            $table->id(); 
            $table->string('ten_sach');
            $table->string('slug_sach');
            $table->integer('id_the_loai')->nullable();
            $table->integer('id_chuyen_muc')->nullable();
            $table->year('nam_xuat_ban');
            $table->integer('id_tac_gia')->nullable();
            $table->integer('so_luong');
            $table->text('hinh_anh');
            $table->string('mo_ta_ngan');
            $table->string('mo_ta_chi_tiet');
            $table->integer('tinh_trang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saches');
    }
};
