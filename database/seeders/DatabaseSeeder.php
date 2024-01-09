<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ChuyenMucSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(NhaCungCapSeeder::class);
        $this->call(KhoaSeeder::class);
        $this->call(TacGiaSeeder::class);
        $this->call(TheLoaiSeeder::class);
        $this->call(SachSeeder::class);
        $this->call(ThanhVienSeeder::class);
    }
}
