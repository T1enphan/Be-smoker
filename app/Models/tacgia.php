<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tacgia extends Model
{
    use HasFactory;
    protected $table = 'tacgias';
    protected $fillable = [
       'ten_tac_gia',
       'but_danh',
       'ngay_sinh',
       'giai_doan_sang_tac',
       'tac_pham',
       'tinh_trang',
    ];
}
