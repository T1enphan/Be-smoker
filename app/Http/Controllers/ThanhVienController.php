<?php

namespace App\Http\Controllers;

use App\Models\ThanhVien;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ThanhVienController extends Controller
{
    public function getData()
    {
        $data   = ThanhVien::select('id', 'ho_va_ten', 'dia_chi', 'id_khoa', 'email', 'so_dien_thoai',
                                    'ngay_sinh', 'ma_sinh_vien', 'password', 'ngay_dang_ky', 'tinh_trang',)
            ->get(); // get là ra 1 danh sách

        return response()->json([
            'thanh_vien'  =>  $data,
        ]);
    }

    public function searchThanhVien(Request $request)
    {
        $key = "%" . $request->abc . "%";

        $data   = ThanhVien::select('id', 'ho_va_ten', 'dia_chi', 'id_khoa', 'email', 'tinh_trang',
                                    'so_dien_thoai', 'ngay_sinh', 'ma_sinh_vien', 'password', 'ngay_dang_ky',)
            ->where('ho_va_ten', 'like', $key)
            ->get();

        return response()->json([
            'thanh_vien'  =>  $data,
        ]);
    }

    public function createThanhVien(Request $request)
    {
        ThanhVien::create([
            'ho_va_ten'         =>$request->ho_va_ten,
            'dia_chi'           =>$request->dia_chi,
            'id_khoa'           =>$request->id_khoa,
            'email'             =>$request->email,
            'so_dien_thoai'     =>$request->so_dien_thoai,
            'ngay_sinh'         =>$request->ngay_sinh,
            'ma_sinh_vien'      =>$request->ma_sinh_vien,
            'password'          =>$request->password,
            'ngay_dang_ky'      =>$request->ngay_dang_ky,
            'tinh_trang'        =>$request->tinh_trang,
        ]);

        return response()->json([
            'status'            =>   true,
            'message'           =>   'Đã tạo mới thành viên thành công!',
        ]);
    }
    public function xoaThanhVien($id)
    {
        try {
            ThanhVien::where('id', $id)->delete();
            return response()->json([
                'status'            =>   true,
                'message'           =>   'Xóa thành viên thành công!',
            ]);
        } catch (Exception $e) {
            Log::info("Lỗi", $e);
            return response()->json([
                'status'            =>   false,
                'message'           =>   'Có lỗi',
            ]);
        }
    }
    public function capNhatThanhVien(Request $request)
    {
        try {
            ThanhVien::where('id', $request->id)
                ->update([
                    'ho_va_ten'         =>$request->ho_va_ten,
                    'dia_chi'           =>$request->dia_chi,
                    'id_khoa'           =>$request->id_khoa,
                    'email'             =>$request->email,
                    'so_dien_thoai'     =>$request->so_dien_thoai,
                    'ngay_sinh'         =>$request->ngay_sinh,
                    'ma_sinh_vien'      =>$request->ma_sinh_vien,
                    'password'          =>$request->password,
                    'ngay_dang_ky'      =>$request->ngay_dang_ky,
                    'tinh_trang'        =>$request->tinh_trang,
                ]);
            return response()->json([
                'status'            =>   true,
                'message'           =>   'Đã cập nhật thành công thành viên ' . $request->ho_va_ten,
            ]);
        } catch (Exception $e) {
            Log::info("Lỗi", $e);
            return response()->json([
                'status'            =>   false,
                'message'           =>   'Có lỗi',
            ]);
        }
    }
    public function doiTrangThaiThanhVien(Request $request)
    {
        try {
            if ($request->tinh_trang == 1) {
                $tinh_trang_moi = 0;
            } else {
                $tinh_trang_moi = 1;
            }
            ThanhVien::where('id', $request->id)
                ->update([
                    'tinh_trang'  => $tinh_trang_moi,
                ]);
            return response()->json([
                'status'            =>   true,
                'message'           =>   'Đã đổi trạng thái thành công',
            ]);
        } catch (Exception $e) {
            Log::info("Lỗi", $e);
            return response()->json([
                'status'            =>   false,
                'message'           =>   'Có lỗi',
            ]);
        }
    }
}
