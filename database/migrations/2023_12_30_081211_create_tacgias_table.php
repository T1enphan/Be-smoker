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
        Schema::create('tacgias', function (Blueprint $table) {
            $table->id();
            $table->string('ten_tac_gia');
            $table->string('but_danh');
            $table->string('ngay_sinh');
            $table->string('giai_doan_sang_tac');
            $table->string('tac_pham');
            $table->integer('tinh_trang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tacgias');
    }
};
