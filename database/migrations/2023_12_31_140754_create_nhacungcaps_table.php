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
        Schema::create('nhacungcaps', function (Blueprint $table) {
            $table->id();
            $table->string('ten_cong_ty');
            $table->string('nguoi_dai_dien');
            $table->string('ma_so_thue');
            $table->string('so_dien_thoai');
            $table->string('email');
            $table->string('dia_chi');
            $table->integer('tinh_trang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhacungcaps');
    }
};
