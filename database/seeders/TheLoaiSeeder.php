<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TheLoaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('theloais')->delete();
        DB::table('theloais')->truncate();
        DB::table('theloais')->insert([  
            [
               'ten_the_loai'   => 'Kinh Dị',
               'slug_the_loai'  => 'kinh-di',
               'tinh_trang'     => '1',
            ],
            [
                'ten_the_loai'   => 'Phiêu Lưu',
                'slug_the_loai'  => 'phieu-luu',
                'tinh_trang'     => '1',
            ],
            [
                'ten_the_loai'   => 'Khoa Học',
                'slug_the_loai'  => 'khoa-hoc',
                'tinh_trang'     => '1',
            ],
            [
                'ten_the_loai'   => 'Tự Truyện',
                'slug_the_loai'  => 'tu-truyen',
                'tinh_trang'     => '1',
            ], 
            [
                'ten_the_loai'   => 'Tiểu Thuyết',
                'slug_the_loai'  => 'tieu-thuyet',
                'tinh_trang'     => '1',
            ], 
            [
                'ten_the_loai'   => 'Cổ Tích',
                'slug_the_loai'  => 'co-tich',
                'tinh_trang'     => '1',
            ], 
            [
                'ten_the_loai'   => 'Trinh Thám',
               'slug_the_loai'   => 'trinh-tham',
               'tinh_trang'      => '1',
            ],

        ]);
    }
}
