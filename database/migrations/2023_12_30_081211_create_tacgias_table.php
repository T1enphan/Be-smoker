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
            $table->string('but_danh')->nullable();
            $table->date('ngay_sinh')->nullable();
            $table->string('giai_doan_sang_tac');
            $table->string('tac_pham');
            $table->string('hinh_anh')->nullable();
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
