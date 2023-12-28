<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    use HasFactory;
    protected $table = 'saches';
    protected $fillable = [
            'ten_sach',
            'slug_sach',
            'id_the_loai',
            'id_chuyen_muc',
            'nam_xuat_ban',
            'id_tac_gia',
            'so_luong',
            'hinh_anh',
            'mo_ta_ngan',
            'mo_ta_chi_tiet',
    ];
}
