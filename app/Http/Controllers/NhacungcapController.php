<?php

namespace App\Http\Controllers;

use App\Models\nhacungcap;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NhacungcapController extends Controller
{
    public function getData()
    {
        $data   = nhacungcap::select(
            'id',
            'ten_cong_ty',
            'nguoi_dai_dien',
            'ma_so_thue',
            'so_dien_thoai',
            'email',
            'dia_chi',
            'tinh_trang',
        )
            ->get();

        return response()->json([
            'nha_cung_cap'  =>  $data,
        ]);
    }

    public function searchNhacungcap(Request $request)
    {
        $key = "%" . $request->abc . "%";

        $data   = nhacungcap::select(
            'id',
            'ten_cong_ty',
            'nguoi_dai_dien',
            'ma_so_thue',
            'so_dien_thoai',
            'email',
            'dia_chi',
            'tinh_trang',
        )
            ->where('ten_cong_ty', 'like', $key)
            ->get();

        return response()->json([
            'nha_cung_cap'  =>  $data,
        ]);
    }

    public function createNhacungcap(Request $request)
    {
        nhacungcap::create([
            'ten_cong_ty'       => $request->ten_cong_ty,
            'nguoi_dai_dien'    => $request->nguoi_dai_dien,
            'ma_so_thue'        => $request->ma_so_thue,
            'so_dien_thoai'     => $request->so_dien_thoai,
            'email'             => $request->email,
            'dia_chi'           => $request->dia_chi,
            'tinh_trang'        => $request->tinh_trang,
        ]);

        return response()->json([
            'status'            =>   true,
            'message'           =>   'Đã tạo mới thành viên thành công!',
        ]);
    }
    public function xoaNhacungcap($id)
    {
        try {
            nhacungcap::where('id', $id)->delete();
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
    public function capNhatNhacungcap(Request $request)
    {
        try {
            nhacungcap::where('id', $request->id)
                ->update([
                    'ten_cong_ty'       => $request->ten_cong_ty,
                    'nguoi_dai_dien'    => $request->nguoi_dai_dien,
                    'ma_so_thue'        => $request->ma_so_thue,
                    'so_dien_thoai'     => $request->so_dien_thoai,
                    'email'             => $request->email,
                    'dia_chi'           => $request->dia_chi,
                    'tinh_trang'        => $request->tinh_trang,
                ]);
            return response()->json([
                'status'            =>   true,
                'message'           =>   'Đã cập nhật thành công nhà cung cấp ' . $request->ho_va_ten,
            ]);
        } catch (Exception $e) {
            Log::info("Lỗi", $e);
            return response()->json([
                'status'            =>   false,
                'message'           =>   'Có lỗi',
            ]);
        }
    }
    public function doiTrangThaiNhacungcap(Request $request)
    {
        try {
            if ($request->tinh_trang == 1) {
                $tinh_trang_moi = 0;
            } else {
                $tinh_trang_moi = 1;
            }
            nhacungcap::where('id', $request->id)
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
