<?php

namespace App\Http\Controllers;

use App\Models\ChiTietMuonSach;
use Illuminate\Http\Request;

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
}
