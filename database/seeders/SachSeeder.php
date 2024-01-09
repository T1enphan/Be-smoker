<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('saches')->delete();
        DB::table('saches')->truncate();
        DB::table('saches')->insert([
            [
                'ten_sach'     => 'Đắc Nhân Tâm',
                'slug_sach'    => Str::slug('Đắc Nhân Tâm'),
                'id_the_loai'  => '1',
                'id_chuyen_muc'=> '1',
                'nam_xuat_ban' => '2022',
                'id_tac_gia'   => '1',
                'so_luong'     => '10',
                'hinh_anh'     => 'https://tse1.mm.bing.net/th?id=OIP.2eZsIlbHCRqQwdT-mlOkAQHaE7&pid=Api&P=0&h=220',
                'tinh_trang'   => random_int(0, 1),
                'mo_ta_ngan'   => 'Đắc Nhân Tâm (How to Win Friends and Influence People) được mệnh danh là quyển sách hay nhất, nổi tiếng nhất, bán chạy nhất và nó có tầm ảnh hưởng đi xa nhất mọi thời đại',
                'mo_ta_chi_tiet' => 'Quyển sách này cũng nêu bật lên.',
            ],
            [
                'ten_sach'     => 'Nhà Giả Kim',
                'slug_sach'    => Str::slug('Nhà Giả Kim'),
                'id_the_loai'  => '2',
                'id_chuyen_muc'=> '2',
                'nam_xuat_ban' => '2022',
                'id_tac_gia'   => '2',
                'so_luong'     => '20',
                'hinh_anh'     => 'https://isachhay.net/wp-content/uploads/2017/08/sach-hay-nha-gia-kim.jpg',
                'tinh_trang'   => random_int(0, 1),
                'mo_ta_ngan'   => 'Nhà giả kim (The Alchemist) của Paulo Coelho là một cuốn sách hay dành cho những người đã đánh mất đi ước mơ hoặc chưa bao giờ có nó',
                'mo_ta_chi_tiet' => 'Lời văn tuy bình dị,',
            ],
            [
                'ten_sach'     => 'Tuổi Trẻ Đáng Giá Bao Nhiêu',
                'slug_sach'    => Str::slug('Tuổi Trẻ Đáng Giá Bao Nhiêu'),
                'id_the_loai'  => '5',
                'id_chuyen_muc'=> '5',
                'nam_xuat_ban' => '2022',
                'id_tac_gia'   => '5',
                'so_luong'     => '50',
                'hinh_anh'     => 'https://isachhay.net/wp-content/uploads/2017/08/sach-hay-tuoi-tre-dang-gia-bao-nhieu.jpg',
                'tinh_trang'   => random_int(0, 1),
                'mo_ta_ngan'   => 'Bạn từng trải qua những ngày tháng nhạt nhẽo với công việc bạn căm ghét, người ta chẳng hề bận lòng?',
                'mo_ta_chi_tiet' => ' Bạn có chết mòn nơi xg,Nên hãy làm những điều bạn thích. Hãy đi theo tiếng nói trái tim. Hãy sống theo cách bạn cho là mình nên sống.',
            ],
            [
                'ten_sach'     => 'Tội Ác Và Hình Phạt',
                'slug_sach'    => Str::slug('Tội Ác Và Hình Phạt'),
                'id_the_loai'  => '3',
                'id_chuyen_muc'=> '3',
                'nam_xuat_ban' => '2022',
                'id_tac_gia'   => '3',
                'so_luong'     => '30',
                'hinh_anh'     => 'https://isachhay.net/wp-content/uploads/2017/08/sach-hay-toi-ac-va-hinh-phat.jpg',
                'tinh_trang'   => random_int(0, 1),
                'mo_ta_ngan'   => 'Tội Ác Và Hình Phạt – Cuốn sách này nằm trong khá nhiều danh sách “những cuốn sách hàng đầu nên đọc trong suốt cuộc đời của bạn“.',
                'mo_ta_chi_tiet' => 'Câu chu',
            ],
            [
                'ten_sach'     => 'Mỗi Lần Vấp Ngã Là Mỗi Lần Trưởng Thành',
                'slug_sach'    => Str::slug('Mỗi Lần Vấp Ngã Là Mỗi Lần Trưởng Thành'),
                'id_the_loai'  => '4',
                'id_chuyen_muc'=> '4',
                'nam_xuat_ban' => '2022',
                'id_tac_gia'   => '4',
                'so_luong'     => '40',
                'hinh_anh'     => 'https://isachhay.net/wp-content/uploads/2017/08/sach-hay-moi-lan-vap-nga-la-mot-lan-truong-thanh.jpg',
                'tinh_trang'   => random_int(0, 1),
                'mo_ta_ngan'   => 'Đây là cuốn sách giúp bạn trưởng thành hơn mà một lần vô tình ghé nhà sách, tôi bắt gặp tựa đề quá hay',
                'mo_ta_chi_tiet' => 'Người ta vẫg nỗi đau.',
            ],
        ]);
    }
}
