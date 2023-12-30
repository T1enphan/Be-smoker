<?php

namespace App\Http\Controllers;

use App\Models\Khoa;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class KhoaController extends Controller
{
    public function getData()
    {
        $data   = Khoa::select('id', 'ten_khoa', 'slug_khoa', 'tinh_trang')
            ->get(); // get là ra 1 danh sách

        return response()->json([
            'khoa'  =>  $data,
        ]);
    }

    public function searchKhoa(Request $request)
    {
        $key = "%" . $request->abc . "%";

        $data   = Khoa::select('id', 'ten_khoa', 'slug_khoa', 'tinh_trang')
            ->where('ten_khoa', 'like', $key)
            ->get();

        return response()->json([
            'khoa'  =>  $data,
        ]);
    }

    public function createKhoa(Request $request)
    {
        Khoa::create([
            'ten_khoa'          =>$request->ten_khoa,
            'slug_khoa'         =>$request->slug_khoa,
            'tinh_trang'        =>$request->tinh_trang,
        ]);

        return response()->json([
            'status'            =>   true,
            'message'           =>   'Đã tạo mới khoa thành công!',
        ]);
    }
    public function xoaKhoa($id)
    {
        try {
            Khoa::where('id', $id)->delete();
            return response()->json([
                'status'            =>   true,
                'message'           =>   'Xóa khoa thành công!',
            ]);
        } catch (Exception $e) {
            Log::info("Lỗi", $e);
            return response()->json([
                'status'            =>   false,
                'message'           =>   'Có lỗi',
            ]);
        }
    }
    public function capNhatKhoa(Request $request)
    {
        try {
            Khoa::where('id', $request->id)
                ->update([
                    'ten_khoa'          =>$request->ten_khoa,
                    'slug_khoa'         =>$request->slug_khoa,
                    'tinh_trang'        =>$request->tinh_trang,
                ]);
            return response()->json([
                'status'            =>   true,
                'message'           =>   'Đã cập nhật thành công khoa ' . $request->ten_khoa,
            ]);
        } catch (Exception $e) {
            Log::info("Lỗi", $e);
            return response()->json([
                'status'            =>   false,
                'message'           =>   'Có lỗi',
            ]);
        }
    }
    public function doiTrangThaiKhoa(Request $request)
    {
        try {
            if ($request->tinh_trang == 1) {
                $tinh_trang_moi = 0;
            } else {
                $tinh_trang_moi = 1;
            }
            Khoa::where('id', $request->id)
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
