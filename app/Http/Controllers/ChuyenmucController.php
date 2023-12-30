<?php

namespace App\Http\Controllers;

use App\Models\chuyenmuc;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ChuyenmucController extends Controller
{
    public function getData()
    {
        $data   = chuyenmuc::select(
            'id',
            'ten_chuyen_muc',
            'slug_chuyen_muc',
            'tinh_trang',
        )
            ->get(); // get là ra 1 danh sách

        return response()->json([
            'chuyen_muc'  =>  $data,
        ]);
    }
    public function createChuyenMuc(Request $request)
    {
        chuyenmuc::create([
            'ten_chuyen_muc'     => $request->ten_chuyen_muc,
            'slug_chuyen_muc'    => $request->slug_chuyen_muc,
            'tinh_trang'         => $request->tinh_trang,
        ]);

        return response()->json([
            'status'            =>   true,
            'message'           =>   'Đã tạo mới chuyên mục thành công!',
        ]);
    }
    public function searchChuyenMuc(Request $request)
    {
        $key = "%" . $request->abc . "%";

        $data   = chuyenmuc::select(
            'id',
            'ten_chuyen_muc',
            'slug_chuyen_muc',
            'tinh_trang',
        )
            ->where('ten_chuyen_muc', 'like', $key)
            ->get();

        return response()->json([
            'chuyen_muc'  =>  $data,
        ]);
    }
    // doiTrangThaiChuyenMuc
    public function doiTrangThaiChuyenMuc(Request $request)
    {
        try {
            if ($request->tinh_trang == 1) {
                $tinh_trang_moi = 0;
            } else {
                $tinh_trang_moi = 1;
            }
            chuyenmuc::where('id', $request->id)
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
    public function xoaChuyenMuc($id)
    {
        try {
            chuyenmuc::where('id', $id)->delete();
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
    public function capNhatChuyenMuc(Request $request)
    {
        try {
            chuyenmuc::where('id', $request->id)
                ->update([
                    'ten_chuyen_muc'     => $request->ten_chuyen_muc,
                    'slug_chuyen_muc'    => $request->slug_chuyen_muc,
                    'tinh_trang'         => $request->tinh_trang,
                ]);
            return response()->json([
                'status'            =>   true,
                'message'           =>   'Đã cập nhật thành công danh mục ' . $request->ten_danh_muc,
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
