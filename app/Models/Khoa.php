<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khoa extends Model
{
    use HasFactory;

    protected $table = 'khoas';

    protected $fillable = [
        'ten_khoa',
        'slug_khoa',
        'tinh_trang',
    ];
}
