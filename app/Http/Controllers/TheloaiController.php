<?php

namespace App\Http\Controllers;

use App\Models\theloai;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TheloaiController extends Controller
{
    public function getData()
    {
        $data   = theloai::select(
            'ten_the_loai',
            'slug_the_loai',
            'tinh_trang',
        )
            ->get(); // get là ra 1 danh sách

        return response()->json([
            'the_loai'  =>  $data,
        ]);
    }
    public function createTheloai(Request $request)
    {
        theloai::create([
            'ten_the_loai'            => $request->ten_the_loai,
            'slug_the_loai'           => $request->slug_the_loai,
            'tinh_trang'              => $request->tinh_trang,
        ]);

        return response()->json([
            'status'            =>   true,
            'message'           =>   'Đã tạo mới chuyên mục thành công!',
        ]);
    }
    public function searchTheloai(Request $request)
    {
        $key = "%" . $request->abc . "%";

        $data   = theloai::select(
            'id',
            'ten_the_loai',
            'slug_the_loai',
            'tinh_trang'
        )
            ->where('ten_the_loai', 'like', $key)
            ->get();

        return response()->json([
            'the_loai'  =>  $data,
        ]);
    }
  
    public function doiTrangThaiTheloai(Request $request)
    {
        try {
            if ($request->tinh_trang == 1) {
                $tinh_trang_moi = 0;
            } else {
                $tinh_trang_moi = 1;
            }
            theloai::where('id', $request->id)
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
    public function xoaTheloai($id)
    {
        try {
            theloai::where('id', $id)->delete();
            return response()->json([
                'status'            =>   true,
                'message'           =>   'Xóa danh mục thành công!',
            ]);
        } catch (Exception $e) {
            Log::info("Lỗi", $e);
            return response()->json([
                'status'            =>   false,
                'message'           =>   'Có lỗi',
            ]);
        }
    }
    public function capNhatTheloai(Request $request)
    {
        try {
            theloai::where('id', $request->id)
                ->update([
                    'ten_the_loai'            => $request->ten_the_loai,
                    'slug_the_loai'           => $request->slug_the_loai,
                    'tinh_trang'              => $request->tinh_trang,
                ]);
            return response()->json([
                'status'            =>   true,
                'message'           =>   'Đã cập nhật thành công Thể Loại ' . $request->ten_the_loai,
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
