<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('admins')->delete();
        DB::table('admins')->truncate();
        DB::table('admins')->insert([
            [
                'ho_va_ten'    => 'Tấn Thành',
                'email'        => 'tanthanh@gmail.com',
                'password'     => '123456',
                'ngay_sinh'    => '2003-2-25',
                'so_dien_thoai'=> '0399183534',
                'tinh_trang'   => random_int(0, 1),
            ],
            [
                'ho_va_ten'    => 'Tấn Thành1',
                'email'        => 'tanthanh@gmail.com',
                'password'     => '123456',
                'ngay_sinh'    => '2003-2-25',
                'so_dien_thoai'=> '0399183534',
                'tinh_trang'   => random_int(0, 1),
            ],
            [
                'ho_va_ten'    => 'Tấn Thành2',
                'email'        => 'tanthanh@gmail.com',
                'password'     => '123456',
                'ngay_sinh'    => '2003-2-25',
                'so_dien_thoai'=> '0399183534',
                'tinh_trang'   => random_int(0, 1),
            ],

        ]);
    }
}
