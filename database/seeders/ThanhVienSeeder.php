<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThanhVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('thanh_viens')->delete();

        DB::table('thanh_viens')->truncate();

        DB::table('thanh_viens')->insert([
            [
                'ho_va_ten'             => 'Tiến',
                'dia_chi'               => 'Ngũ Hành Sơn',
                'id_khoa'               => '1',
                'email'                 => 'tien@gmail.com',
                'so_dien_thoai'         => '223232',
                'ngay_sinh'             => '2001-01-01',
                'ma_sinh_vien'          => '11111122',
                'password'              => 'tien11',
                'ngay_dang_ky'          => '2011-01-01',
                'tinh_trang'            => '1',
            ],
            [
                'ho_va_ten'             => 'Lê Viết Ngọc',
                'dia_chi'               => 'Điện Bàn',
                'id_khoa'               => '1',
                'email'                 => 'ngoc@gmail.com',
                'so_dien_thoai'         => '223232',
                'ngay_sinh'             => '2001-01-01',
                'ma_sinh_vien'          => '666661122',
                'password'              => 'ngoc11',
                'ngay_dang_ky'          => '2011-01-01',
                'tinh_trang'            => '1',
            ],
            [
                'ho_va_ten'             => 'Nguyễn Tấn Thành',
                'dia_chi'               => 'Điện Phước',
                'id_khoa'               => '1',
                'email'                 => 'thanh@gmail.com',
                'so_dien_thoai'         => '223232',
                'ngay_sinh'             => '2001-01-01',
                'ma_sinh_vien'          => '11111122',
                'password'              => 'thanh22',
                'ngay_dang_ky'          => '2011-01-01',
                'tinh_trang'            => '1',
            ],
            [
                'ho_va_ten'             => 'Văn Phúc',
                'dia_chi'               => 'Sơn Trà',
                'id_khoa'               => '1',
                'email'                 => 'phuc@gmail.com',
                'so_dien_thoai'         => '223232',
                'ngay_sinh'             => '2001-01-01',
                'ma_sinh_vien'          => '11111122',
                'password'              => 'phuc11',
                'ngay_dang_ky'          => '2011-01-01',
                'tinh_trang'            => '1',
            ],
        ]);
    }
}
