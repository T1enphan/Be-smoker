<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChiTietMuonSachController;
use App\Http\Controllers\ChiTietSachController;
use App\Http\Controllers\KhoaController;
use App\Http\Controllers\ChuyenmucController;
use App\Http\Controllers\NhacungcapController;
use App\Http\Controllers\SachController;
use App\Http\Controllers\TacgiaController;
use App\Http\Controllers\ThanhVienController;
use App\Http\Controllers\TheloaiController;
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


Route::post('/login', [AdminController::class, 'login']);
// Route::post('/register', [AdminController::class, 'register']);
Route::post('/check', [AdminController::class, 'check']);
Route::delete('/remove-token/{id}', [AdminController::class, 'removeToken']);


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
    Route::group(['prefix'  =>  '/admin'], function () {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [AdminController::class, 'getData']);
        Route::post('/tim-admin', [AdminController::class, 'searchAdmin']);
        Route::post('/tao-admin', [AdminController::class, 'createAdmin']);
        Route::delete('/xoa-admin/{id}', [AdminController::class, 'xoaAdmin']);
        Route::put('/cap-nhat-admin', [AdminController::class, 'capNhatAdmin']);
        Route::put('/doi-trang-thai', [AdminController::class, 'doiTrangThaiAdmin']);
    });
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
    Route::group(['prefix'  =>  '/chuyen-muc'], function () {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [ChuyenmucController::class, 'getData']);
        Route::post('/tao-chuyen-muc', [ChuyenmucController::class, 'createChuyenMuc']);
        Route::post('/tim-chuyen-muc', [ChuyenmucController::class, 'searchChuyenMuc']);
        Route::put('/doi-trang-thai', [ChuyenmucController::class, 'doiTrangThaiChuyenMuc']);
        Route::delete('/xoa-chuyen-muc/{id}', [ChuyenmucController::class, 'xoaChuyenMuc']);
        Route::put('/cap-nhat-chuyen-muc', [ChuyenmucController::class, 'capNhatChuyenMuc']);
    });
    Route::group(['prefix'  =>  '/tac-gia'], function () {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [TacgiaController::class, 'getData']);
        Route::post('/tao-tac-gia', [TacgiaController::class, 'createTacgia']);
        Route::post('/tim-tac-gia', [TacgiaController::class, 'searchTacgia']);
        Route::put('/doi-trang-thai', [TacgiaController::class, 'doiTrangThaiTacgia']);
        Route::delete('/xoa-tac-gia/{id}', [TacgiaController::class, 'xoaTacgia']);
        Route::put('/cap-nhat-tac-gia', [TacgiaController::class, 'capNhatTacgia']);
    });
    Route::group(['prefix'  =>  '/the-loai'], function () {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [TheloaiController::class, 'getData']);
        Route::post('/tao-the-loai', [TheloaiController::class, 'createTheloai']);
        Route::post('/tim-the-loai', [TheloaiController::class, 'searchTheloai']);
        Route::put('/doi-trang-thai', [TheloaiController::class, 'doiTrangThaiTheloai']);
        Route::delete('/xoa-the-loai/{id}', [TheloaiController::class, 'xoaTheloai']);
        Route::put('/cap-nhat-the-loai', [TheloaiController::class, 'capNhatTheloai']);
    });
    Route::group(['prefix'  =>  '/nha-cung-cap'], function () {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [NhacungcapController::class, 'getData']);
        Route::post('/tao-nha-cung-cap', [NhacungcapController::class, 'createNhacungcap']);
        Route::post('/tim-nha-cung-cap', [NhacungcapController::class, 'searchNhacungcap']);
        Route::put('/doi-trang-thai', [NhacungcapController::class, 'doiTrangThaiNhacungcap']);
        Route::delete('/xoa-nha-cung-cap/{id}', [NhacungcapController::class, 'xoaNhacungcap']);
        Route::put('/cap-nhat-nha-cung-cap', [NhacungcapController::class, 'capNhatNhacungcap']);
    });
    Route::group(['prefix'  =>  '/chi-tiet-sach'], function () {
        Route::post('/the-loai', [ChiTietSachController::class, 'getDataTheLoai']);
    });
    Route::group(['prefix'  =>  '/chi-tiet-muon-sach'], function () {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [ChiTietMuonSachController::class, 'getData']);
        Route::post('/tao-muon-sach', [ChiTietMuonSachController::class, 'createMuonSach']);
        Route::delete('/xoa-thong-tin/{id}', [ChiTietMuonSachController::class, 'xoaThongTin']);
        Route::put('/doi-trang-thai', [ChiTietMuonSachController::class, 'doiTrangThai']);
        Route::post('/tim-thong-tin', [ChiTietMuonSachController::class, 'searchThongTin']);
    });
});
