<?php

use App\Http\Controllers\KhoaController;
use App\Http\Controllers\SachController;
use App\Http\Controllers\ThanhVienController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::group(['prefix'  =>  '/admin'], function () {
    // Những gì của danh mục thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/sach'], function () {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [SachController::class, 'getData']);
        Route::post('/tim-sach', [SachController::class, 'searchSach']);
        Route::post('/tao-sach', [SachController::class, 'createSach']);
        Route::delete('/xoa-sach/{id}', [SachController::class, 'xoaSach']);
        Route::put('/cap-nhat-sach', [SachController::class, 'capNhatSach']);
        Route::put('/doi-trang-thai', [SachController::class, 'doiTrangThaiSach']);
    });
});

Route::group(['prefix'  =>  '/admin'], function () {
    Route::group(['prefix'  =>  '/thanh-vien'], function () {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [ThanhVienController::class, 'getData']);
        Route::post('/tim-thanh-vien', [ThanhVienController::class, 'searchThanhVien']);
        Route::post('/tao-thanh-vien', [ThanhVienController::class, 'createThanhVien']);
        Route::delete('/xoa-thanh-vien/{id}', [ThanhVienController::class, 'xoaThanhVien']);
        Route::put('/cap-nhat-thanh-vien', [ThanhVienController::class, 'capNhatThanhVien']);
        Route::put('/doi-trang-thai', [ThanhVienController::class, 'doiTrangThaiThanhVien']);

    });
    Route::group(['prefix'  =>  '/khoa'], function () {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [KhoaController::class, 'getData']);
        Route::post('/tim-khoa', [KhoaController::class, 'searchKhoa']);
        Route::post('/tao-khoa', [KhoaController::class, 'createKhoa']);
        Route::delete('/xoa-khoa/{id}', [KhoaController::class, 'xoaKhoa']);
        Route::put('/cap-nhat-khoa', [KhoaController::class, 'capNhatKhoa']);
        Route::put('/doi-trang-thai', [KhoaController::class, 'doiTrangThaiKhoa']);

    });
});

    Route::group(['prefix'  =>  '/khoa'], function () {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [KhoaController::class, 'getData']);
        Route::post('/tim-khoa', [KhoaController::class, 'searchKhoa']);
        Route::post('/tao-khoa', [KhoaController::class, 'createKhoa']);
        Route::delete('/xoa-khoa/{id}', [KhoaController::class, 'xoaKhoa']);
        Route::put('/cap-nhat-khoa', [KhoaController::class, 'capNhatKhoa']);
        Route::put('/doi-trang-thai', [KhoaController::class, 'doiTrangThaiKhoa']);

    });
