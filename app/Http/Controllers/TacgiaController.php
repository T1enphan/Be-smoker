<?php

namespace App\Http\Controllers;

use App\Models\tacgia;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TacgiaController extends Controller
{
    public function getData()
    {
        $data   = tacgia::select(
            'ten_tac_gia',
            'but_danh',
            'ngay_sinh',
            'giai_doan_sang_tac',
            'tac_pham',
            'tinh_trang',
        )
            ->get(); // get là ra 1 danh sách
        return response()->json([
            'tac_gia'  =>  $data,
        ]);
    }
    public function createTacgia(Request $request)
    {
        tacgia::create([
            'ten_tac_gia'            => $request->ten_tac_gia,
            'but_danh'               => $request->but_danh,
            'ngay_sinh'              => $request->ngay_sinh,
            'giai_doan_sang_tac'     => $request->giai_doan_sang_tac,
            'tac_pham'               => $request->tac_pham,
            'tinh_trang'             => $request->tinh_trang,

        ]);

        return response()->json([
            'status'            =>   true,
            'message'           =>   'Đã tạo mới chuyên mục thành công!',
        ]);
    }
    public function searchTacgia(Request $request)
    {
        $key = "%" . $request->abc . "%";

        $data   = tacgia::select(
            'id',
            'ten_tac_gia',
            'but_danh',
            'ngay_sinh',
            'giai_doan_sang_tac',
            'tac_pham',
            'tinh_trang' 
        )
            ->where('ten_tac_gia', 'like', $key)
            ->get();

        return response()->json([
            'tac_gia'  =>  $data,
        ]);
    }
    // doiTrangThaiChuyenMuc
    public function doiTrangThaiTacgia(Request $request)
    {
        try {
            if ($request->tinh_trang == 1) {
                $tinh_trang_moi = 0;
            } else {
                $tinh_trang_moi = 1;
            }
            tacgia::where('id', $request->id)
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
    public function xoaTacgia($id)
    {
        try {
            tacgia::where('id', $id)->delete();
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
    public function capNhatTacgia(Request $request)
    {
        try {
            tacgia::where('id', $request->id)
                ->update([
                    'ten_tac_gia'            => $request->ten_tac_gia,
                    'but_danh'               => $request->but_danh,
                    'ngay_sinh'              => $request->ngay_sinh,
                    'giai_doan_sang_tac'     => $request->giai_doan_sang_tac,
                    'tac_pham'               => $request->tac_pham,
                    'tinh_trang'             => $request->tinh_trang,
                ]);
            return response()->json([
                'status'            =>   true,
                'message'           =>   'Đã cập nhật thành công Tác giả ' . $request->ten_tac_gia,
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
