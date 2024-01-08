<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasFactory,HasApiTokens, Notifiable;
    protected $table = 'admins';
    protected $fillable = [
        'ho_va_ten',
        'email',
        'password','ngay_sinh',
        'so_dien_thoai',
        'tinh_trang',
    ];
}
