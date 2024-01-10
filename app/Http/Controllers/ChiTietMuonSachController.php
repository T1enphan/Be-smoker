<?php

namespace App\Http\Controllers;

use App\Models\ChiTietMuonSach;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ChiTietMuonSachController extends Controller
{
    public function getData(Request $request)
    {
        $data = ChiTietMuonSach::join('thanh_viens', 'chi_tiet_muon_saches.id_thanh_vien', 'thanh_viens.id')
            ->join('saches', 'chi_tiet_muon_saches.id_sach', 'saches.id')
            ->select('chi_tiet_muon_saches.*', 'thanh_viens.ho_va_ten', 'saches.ten_sach')
            ->get();
        return response()->json([
            'data' => $data,
        ]);
    }
    public function createMuonSach(Request $request)
    {
        ChiTietMuonSach::create([
            'id_thanh_vien'       => $request->id_thanh_vien,
            'id_the_loai'         => $request->id_the_loai,
            'id_sach'             => $request->id_sach,
            'ngay_muon'           => $request->ngay_muon,
            'ngay_tra'            => $request->ngay_tra,
            'tinh_trang'          => $request->tinh_trang,
        ]);

        return response()->json([
            'status'            =>   true,
            'message'           =>   'Đã tạo thông tin thành công!',
        ]);
    }
    public function capNhatMuonSach(Request $request)
    {
        try {
            ChiTietMuonSach::where('id', $request->id)
                ->update([
                    'id_thanh_vien'       => $request->id_thanh_vien,
                    'id_the_loai'         => $request->id_the_loai,
                    'id_sach'             => $request->id_sach,
                    'ngay_muon'           => $request->ngay_muon,
                    'ngay_tra'            => $request->ngay_tra,
                    'tinh_trang'          => $request->tinh_trang,
                ]);
            return response()->json([
                'status'            =>   true,
                'message'           =>   'Đã thông tin thành công!',
            ]);
        } catch (Exception $e) {
            Log::info("Lỗi", $e);
            return response()->json([
                'status'            =>   false,
                'message'           =>   'Có lỗi',
            ]);
        }
    }
    public function doiTrangThai(Request $request)
    {
        try {
            if ($request->tinh_trang == 1) {
                $tinh_trang_moi = 0;
            } else {
                $tinh_trang_moi = 1;
            }
            ChiTietMuonSach::where('id', $request->id)
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
    public function xoaThongTin($id)
    {
        try {
            ChiTietMuonSach::where('id', $id)->delete();
            return response()->json([
                'status'            =>   true,
                'message'           =>   'Xóa thông tin thành công!',
            ]);
        } catch (Exception $e) {
            Log::info("Lỗi", $e);
            return response()->json([
                'status'            =>   false,
                'message'           =>   'Có lỗi',
            ]);
        }
    }
    public function searchThongTin(Request $request)
    {
        $key = "%" . $request->abc . "%";
        $data = ChiTietMuonSach::join('thanh_viens', 'chi_tiet_muon_saches.id_thanh_vien', 'thanh_viens.id')
            ->join('saches', 'chi_tiet_muon_saches.id_sach', 'saches.id')
            ->select('chi_tiet_muon_saches.*', 'thanh_viens.ho_va_ten', 'saches.ten_sach')
            ->where('ten_sach', 'like', $key)
            ->orWhere('ho_va_ten', 'like', $key)
            ->get();
        return response()->json([
            'data' => $data,
        ]);
    }
}
