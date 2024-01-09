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
        Schema::create('chi_tiet_muon_saches', function (Blueprint $table) {
            $table->id();
            $table->integer('id_thanh_vien');
            $table->integer('id_sach');
            $table->date('ngay_muon');
            $table->date('ngay_tra');
            $table->integer('tinh_trang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_muon_saches');
    }
};
