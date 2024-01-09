<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NhaCungCapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('nhacungcaps')->delete();

        DB::table('nhacungcaps')->truncate();

        DB::table('nhacungcaps')->insert([
            [
                'ten_cong_ty'    => 'Công Ty TNHH 1 Thành Viên',
                'nguoi_dai_dien' => 'Huy',
                'ma_so_thue'     => '123456',
                'so_dien_thoai'  => '0399183534',
                'email'          => 'Huynl@gmail.com',
                'dia_chi'        => '30 Xuân Diệu',
                'tinh_trang'     => random_int(0, 1),
            ],
            [
                'ten_cong_ty'    => 'Công Ty TNHH Extra',
                'nguoi_dai_dien' => 'Tiến',
                'ma_so_thue'     => '123456',
                'so_dien_thoai'  => '0911867854',
                'email'          => 'tiencl@gmail.com',
                'dia_chi'        => '20 Nguyễn Tất Thành',
                'tinh_trang'     => random_int(0, 1),
            ],
            [
                'ten_cong_ty'    => 'Công Ty TNHH Thương Mại',
                'nguoi_dai_dien' => 'Vinh',
                'ma_so_thue'     => '123456',
                'so_dien_thoai'  => '0547683217',
                'email'          => 'vinh@gmail.com',
                'dia_chi'        => '226 Lê Duẩn',
                'tinh_trang'     => random_int(0, 1),
            ],
            [
                'ten_cong_ty'    => 'Công Ty TNHH Việt Á',
                'nguoi_dai_dien' => 'Long',
                'ma_so_thue'     => '123456',
                'so_dien_thoai'  => '0567429876',
                'email'          => 'long@gmail.com',
                'dia_chi'        => '20 Nguyễn Văn Linh',
                'tinh_trang'     => random_int(0, 1),
            ],
            [
                'ten_cong_ty'    => 'Công Ty TNHH VCB',
                'nguoi_dai_dien' => 'Bình',
                'ma_so_thue'     => '123456',
                'so_dien_thoai'  => '0123456789',
                'email'          => 'binh@gmail.com',
                'dia_chi'        => '46 Nguyễn Văn Thoại',
                'tinh_trang'     => random_int(0, 1),
            ],
            [
                'ten_cong_ty'    => 'Công Ty TNHH DLS',
                'nguoi_dai_dien' => 'Hưng',
                'ma_so_thue'     => '123456',
                'so_dien_thoai'  => '09763147658',
                'email'          => 'hung@gmail.com',
                'dia_chi'        => '50 Đống Đa',
                'tinh_trang'     => random_int(0, 1),
            ],
        ]);
    }
}
