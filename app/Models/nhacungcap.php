<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhacungcap extends Model
{
    use HasFactory;
    protected $table = 'nhacungcaps';
    protected $fillable = [
       'ten_cong_ty',
       'nguoi_dai_dien',
       'ma_so_thue',
       'so_dien_thoai',
       'email',
       'dia_chi',
       'tinh_trang',
    ];
}
