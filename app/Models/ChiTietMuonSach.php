<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietMuonSach extends Model
{
    use HasFactory;
    protected $table = "chi_tiet_muon_saches";
    protected $fillable = [
        'id_thanh_vien',
        'id_sach',
        'ngay_muon',
        'ngay_tra',
        'tinh_trang',
    ];
}
