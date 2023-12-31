<?php

namespace App\Http\Controllers;

use App\Models\chuyenmuc;
use App\Models\Sach;
use App\Models\tacgia;
use App\Models\theloai;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SachController extends Controller
{
    public function searchSach(Request $request)
    {
        $key = "%" . $request->abc . "%";
        $data = Sach::join('chuyenmucs', 'saches.id_chuyen_muc', 'chuyenmucs.id')
            ->join('tacgias', 'saches.id_tac_gia', 'tacgias.id')
            ->join('theloais', 'saches.id_the_loai', 'theloais.id')
            ->select('saches.*', 'tacgias.ten_tac_gia', 'theloais.ten_the_loai', 'chuyenmucs.ten_chuyen_muc')
            ->where('ten_sach', 'like', $key)
            ->orWhere('ten_tac_gia', 'like', $key)
            ->orWhere('ten_the_loai', 'like', $key)
            ->orWhere('ten_chuyen_muc', 'like', $key)
            ->get();
        return response()->json([
            'data'  =>  $data,
        ]);
    }

    public function getData()
    {
        $data = Sach::join('chuyenmucs', 'saches.id_chuyen_muc', 'chuyenmucs.id')
            ->join('tacgias', 'saches.id_tac_gia', 'tacgias.id')
            ->join('theloais', 'saches.id_the_loai', 'theloais.id')
            ->select('saches.*', 'tacgias.ten_tac_gia', 'theloais.ten_the_loai', 'chuyenmucs.ten_chuyen_muc')
            ->get();
        return response()->json([
            'data' => $data,
        ]);
    }
    public function createSach(Request $request)
    {
        Sach::create([
            'ten_sach' => $request->ten_sach,
            'slug_sach' => $request->slug_sach,
            'id_the_loai' => $request->id_the_loai,
            'id_chuyen_muc' => $request->id_chuyen_muc,
            'nam_xuat_ban' => $request->nam_xuat_ban,
            'id_tac_gia' => $request->id_tac_gia,
            'so_luong' => $request->so_luong,
            'hinh_anh' => $request->hinh_anh,
            'mo_ta_ngan' => $request->mo_ta_ngan,
            'mo_ta_chi_tiet' => $request->mo_ta_chi_tiet,
            'tinh_trang' => $request->tinh_trang,

        ]);

        return response()->json([
            'status'            =>   true,
            'message'           =>   'Đã tạo mới sách thành công!',
        ]);
    }
    public function xoaSach($id)
    {
        try {
            Sach::where('id', $id)->delete();
            return response()->json([
                'status'   => true,
                'message'  => 'xóa sách thành công'
            ]);
        } catch (Exception $e) {
            Log::info("Lỗi", $e);
            return response()->json([
                'status'   => false,
                'message'  => 'xóa sách không thành công'
            ]);
        }
    }
    public function capNhatSach(Request $request)
    {
        try {
            Sach::where('id', $request->id)
                ->update([
                    'ten_sach' => $request->ten_sach,
                    'slug_sach' => $request->slug_sach,
                    'id_the_loai' => $request->id_the_loai,
                    'id_chuyen_muc' => $request->id_chuyen_muc,
                    'nam_xuat_ban' => $request->nam_xuat_ban,
                    'id_tac_gia' => $request->id_tac_gia,
                    'so_luong' => $request->so_luong,
                    'hinh_anh' => $request->hinh_anh,
                    'mo_ta_ngan' => $request->mo_ta_ngan,
                    'mo_ta_chi_tiet' => $request->mo_ta_chi_tiet,
                ]);
            return response()->json([
                'status'            =>   true,
                'message'           =>   'Đã cập nhật thành công ' . $request->ten_sach,
            ]);
        } catch (Exception $e) {
            Log::info("Lỗi", $e);
            return response()->json([
                'status'            =>   false,
                'message'           =>   'Có lỗi',
            ]);
        }
    }
    public function doiTrangThaiSach(Request $request)
    {
        try {
            if ($request->tinh_trang == 1) {
                $tinh_trang_moi = 0;
            } else {
                $tinh_trang_moi = 1;
            }
            Sach::where('id', $request->id)
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
