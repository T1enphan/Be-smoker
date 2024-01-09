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
                'ten_tac_gia'         => 'Bram Stoker',
                'but_danh'            => 'Bram Stoker',
                'ngay_sinh'           => '1847-11-8',
                'giai_doan_sang_tac'  => 'Giai đoạn 1930-1935: Trong giai đoạn này, Vũ Trọng Phụng chủ yếu viết về các vấn đề xã hội, giai cấp và mất mát cái tôi của con người dưới ánh đèn công nghiệp hóa.',
                'tac_pham'            => 'Hồn Trương Ba da Hàng Thịt',
                'tinh_trang'          => random_int(0, 1),
            ],
            [
                'ten_tac_gia'         => 'Mary Shelley',
                'but_danh'            => 'Mary Shelley',
                'ngay_sinh'           => '1912-12-23',
                'giai_doan_sang_tac'  => 'Giai đoạn 1930-1935: Trong giai đoạn này, Vũ Trọng Phụng chủ yếu viết về các vấn đề xã hội, giai cấp và mất mát cái tôi của con người dưới ánh đèn công nghiệp hóa.',
                'tac_pham'            => 'Hồn Trương Ba da Hàng Thịt',
                'tinh_trang'          => random_int(0, 1),
            ],
            [
                'ten_tac_gia'         => 'William Peter Blatty',
                'but_danh'            => 'William Peter Blatty',
                'ngay_sinh'           => '1912-12-23',
                'giai_doan_sang_tac'  => 'Giai đoạn 1930-1935: Trong giai đoạn này, Vũ Trọng Phụng chủ yếu viết về các vấn đề xã hội, giai cấp và mất mát cái tôi của con người dưới ánh đèn công nghiệp hóa.',
                'tac_pham'            => 'Hồn Trương Ba da Hàng Thịt',
                'tinh_trang'          => random_int(0, 1),
            ],
            [
                'ten_tac_gia'         => 'Stephen King',
                'but_danh'            => 'Stephen King',
                'ngay_sinh'           => '1912-12-23',
                'giai_doan_sang_tac'  => 'Giai đoạn 1930-1935: Trong giai đoạn này, Vũ Trọng Phụng chủ yếu viết về các vấn đề xã hội, giai cấp và mất mát cái tôi của con người dưới ánh đèn công nghiệp hóa.',
                'tac_pham'            => 'Hồn Trương Ba da Hàng Thịt',
                'tinh_trang'          => random_int(0, 1),
            ],
            [
                'ten_tac_gia'         => 'Mark Twain',
                'but_danh'            => 'Mark Twain',
                'ngay_sinh'           => '1847-11-8',
                'giai_doan_sang_tac'  => 'Giai đoạn 1930-1935: Trong giai đoạn này, Vũ Trọng Phụng chủ yếu viết về các vấn đề xã hội, giai cấp và mất mát cái tôi của con người dưới ánh đèn công nghiệp hóa.',
                'tac_pham'            => 'Hồn Trương Ba da Hàng Thịt',
                'tinh_trang'          => random_int(0, 1),
            ],
            [
                'ten_tac_gia'         => 'J. R. R. Tolkien',
                'but_danh'            => 'J. R. R. Tolkien',
                'ngay_sinh'           => '1912-12-23',
                'giai_doan_sang_tac'  => 'Giai đoạn 1930-1935: Trong giai đoạn này, Vũ Trọng Phụng chủ yếu viết về các vấn đề xã hội, giai cấp và mất mát cái tôi của con người dưới ánh đèn công nghiệp hóa.',
                'tac_pham'            => 'Hồn Trương Ba da Hàng Thịt',
                'tinh_trang'          => random_int(0, 1),
            ],
            [
                'ten_tac_gia'         => 'Robert Louis Stevenson',
                'but_danh'            => 'Robert Louis Stevenson',
                'ngay_sinh'           => '1912-12-23',
                'giai_doan_sang_tac'  => 'Giai đoạn 1930-1935: Trong giai đoạn này, Vũ Trọng Phụng chủ yếu viết về các vấn đề xã hội, giai cấp và mất mát cái tôi của con người dưới ánh đèn công nghiệp hóa.',
                'tac_pham'            => 'Hồn Trương Ba da Hàng Thịt',
                'tinh_trang'          => random_int(0, 1),
            ],
            [
                'ten_tac_gia'         => 'Stephen Hawking',
                'but_danh'            => 'Stephen Hawking',
                'ngay_sinh'           => '1912-12-23',
                'giai_doan_sang_tac'  => 'Giai đoạn 1930-1935: Trong giai đoạn này, Vũ Trọng Phụng chủ yếu viết về các vấn đề xã hội, giai cấp và mất mát cái tôi của con người dưới ánh đèn công nghiệp hóa.',
                'tac_pham'            => 'Hồn Trương Ba da Hàng Thịt',
                'tinh_trang'          => random_int(0, 1),
            ],
            [
                'ten_tac_gia'         => 'Richard Dawkins',
                'but_danh'            => 'Richard Dawkins',
                'ngay_sinh'           => '1912-12-23',
                'giai_doan_sang_tac'  => 'Giai đoạn 1930-1935: Trong giai đoạn này, Vũ Trọng Phụng chủ yếu viết về các vấn đề xã hội, giai cấp và mất mát cái tôi của con người dưới ánh đèn công nghiệp hóa.',
                'tac_pham'            => 'Hồn Trương Ba da Hàng Thịt',
                'tinh_trang'          => random_int(0, 1),
            ],
            [
                'ten_tac_gia'         => 'Michelle Obama',
                'but_danh'            => 'Michelle Obama',
                'ngay_sinh'           => '1912-12-23',
                'giai_doan_sang_tac'  => 'Giai đoạn 1930-1935: Trong giai đoạn này, Vũ Trọng Phụng chủ yếu viết về các vấn đề xã hội, giai cấp và mất mát cái tôi của con người dưới ánh đèn công nghiệp hóa.',
                'tac_pham'            => 'Hồn Trương Ba da Hàng Thịt',
                'tinh_trang'          => random_int(0, 1),
            ],
            
        ]);
    }
}
