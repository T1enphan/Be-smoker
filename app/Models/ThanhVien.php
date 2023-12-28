<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThanhVien extends Model
{
    use HasFactory;

    protected $table = 'thanh_viens';

    protected $fillable = [
        'ho_va_ten',
        'dia_chi',
        'id_khoa',
        'email',
        'so_dien_thoai',
        'ngay_sinh',
        'ma_sinh_vien',
        'password',
        'ngay_dang_ky',
        'tinh_trang',
    ];
}
