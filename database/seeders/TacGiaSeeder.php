<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TacGiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('tacgias')->delete();

        DB::table('tacgias')->truncate();

        DB::table('tacgias')->insert([
            [
                'ten_tac_gia'         => 'Vũ Trọng Phụng',
                'but_danh'            => 'Vũ Trọng Phụng',
                'ngay_sinh'           => '1912-12-23',
                'giai_doan_sang_tac'  => 'Giai đoạn 1930-1935: Trong giai đoạn này, Vũ Trọng Phụng chủ yếu viết về các vấn đề xã hội, giai cấp và mất mát cái tôi của con người dưới ánh đèn công nghiệp hóa.',
                'tac_pham'            => 'Hồn Trương Ba da Hàng Thịt',
                'tinh_trang'          => random_int(0, 1),
            ],
            [
                'ten_tac_gia'         => 'Vũ Trọng Phụng1',
                'but_danh'            => 'Vũ Trọng Phụng1',
                'ngay_sinh'           => '1912-12-23',
                'giai_doan_sang_tac'  => 'Giai đoạn 1930-1935: Trong giai đoạn này, Vũ Trọng Phụng chủ yếu viết về các vấn đề xã hội, giai cấp và mất mát cái tôi của con người dưới ánh đèn công nghiệp hóa.',
                'tac_pham'            => 'Hồn Trương Ba da Hàng Thịt',
                'tinh_trang'          => random_int(0, 1),
            ],
            [
                'ten_tac_gia'         => 'Vũ Trọng Phụng1',
                'but_danh'            => 'Vũ Trọng Phụng1',
                'ngay_sinh'           => '1912-12-23',
                'giai_doan_sang_tac'  => 'Giai đoạn 1930-1935: Trong giai đoạn này, Vũ Trọng Phụng chủ yếu viết về các vấn đề xã hội, giai cấp và mất mát cái tôi của con người dưới ánh đèn công nghiệp hóa.',
                'tac_pham'            => 'Hồn Trương Ba da Hàng Thịt',
                'tinh_trang'          => random_int(0, 1),
            ],
            [
                'ten_tac_gia'         => 'Vũ Trọng Phụng1',
                'but_danh'            => 'Vũ Trọng Phụng1',
                'ngay_sinh'           => '1912-12-23',
                'giai_doan_sang_tac'  => 'Giai đoạn 1930-1935: Trong giai đoạn này, Vũ Trọng Phụng chủ yếu viết về các vấn đề xã hội, giai cấp và mất mát cái tôi của con người dưới ánh đèn công nghiệp hóa.',
                'tac_pham'            => 'Hồn Trương Ba da Hàng Thịt',
                'tinh_trang'          => random_int(0, 1),
            ],
        ]);
    }
}
