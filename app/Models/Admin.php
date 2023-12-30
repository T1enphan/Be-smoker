<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';
    protected $fillable = [
        'ho_va_ten',
        'email',
        'password','ngay_sinh',
        'so_dien_thoai',
        'tinh_trang',
    ];
}
