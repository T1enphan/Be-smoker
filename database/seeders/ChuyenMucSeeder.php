<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ChuyenMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('chuyenmucs')->delete();

        DB::table('chuyenmucs')->truncate();

        DB::table('chuyenmucs')->insert([
            [
                'ten_chuyen_muc'            => 'Khoa học và công nghệ',
                'slug_chuyen_muc'           => Str::slug('Khoa học và công nghệ'),
                'tinh_trang'                => random_int(0, 1),
            ],
            [
                'ten_chuyen_muc'            => 'Tâm lý học và Tự phát triển',
                'slug_chuyen_muc'           => Str::slug('Tâm lý học và Tự phát triển'),
                'tinh_trang'                => random_int(0, 1),
            ],
            [
                'ten_chuyen_muc'            => 'Kinh doanh và Tài chính',
                'slug_chuyen_muc'           => Str::slug('Kinh doanh và Tài chính'),
                'tinh_trang'                => random_int(0, 1),
            ],
            [
                'ten_chuyen_muc'            => 'Lịch sử và Địa lý',
                'slug_chuyen_muc'           => Str::slug('Lịch sử và Địa lý'),
                'tinh_trang'                => random_int(0, 1),
            ],
            [
                'ten_chuyen_muc'            => 'Sách thiếu nhi',
                'slug_chuyen_muc'           => Str::slug('Sách thiếu nhi'),
                'tinh_trang'                => random_int(0, 1),
            ],
            [
                'ten_chuyen_muc'            => 'Điện Thoại',
                'slug_chuyen_muc'           => Str::slug('Điện Thoại'),
                'tinh_trang'                => random_int(0, 1),
            ],
            [
                'ten_chuyen_muc'            => 'Y học và Sức khỏe',
                'slug_chuyen_muc'           => Str::slug('Y học và Sức khỏe'),
                'tinh_trang'                => random_int(0, 1),
            ],
            [
                'ten_chuyen_muc'            => 'Nghệ thuật và Âm nhạc',
                'slug_chuyen_muc'           => Str::slug('Nghệ thuật và Âm nhạc'),
                'tinh_trang'                => random_int(0, 1),
            ],
            //1
            [
                'ten_chuyen_muc'            => 'Tủ Lạnh Nhiều Cửa',
                'slug_chuyen_muc'           => Str::slug('Tủ Lạnh Nhiều Cửa'),
                'tinh_trang'                => random_int(0, 1),
            ],
            [
                'ten_chuyen_muc'            => 'Tủ Lạnh Ngăn Đá Dưới',
                'slug_chuyen_muc'           => Str::slug('Tủ Lạnh Ngăn Đá Dưới'),
                'tinh_trang'                => random_int(0, 1),
            ],
            [
                'ten_chuyen_muc'            => 'Tôn giáo và Tín ngưỡng',
                'slug_chuyen_muc'           => Str::slug('Tôn giáo và Tín ngưỡng'),
                'tinh_trang'                => random_int(0, 1),
            ],
            //2
            [
                'ten_chuyen_muc'            => 'Môi trường và Bảo tồn',
                'slug_chuyen_muc'           => Str::slug('Môi trường và Bảo tồn'),
                'tinh_trang'                => random_int(0, 1),
            ],
        ]);
    }
}
