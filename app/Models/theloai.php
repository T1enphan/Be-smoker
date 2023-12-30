<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    use HasFactory;

    protected $table = 'theloais';
    protected $fillable = [
        'ten_the_loai',
        'slug_the_loai',
        'tinh_trang' 
    ];
}
