<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index()
    {
        return view('admins');
    }

    public function getData()
    {
        $data   = Admin::get(); // get là ra 1 danh Admin

        return response()->json([
            'admins'  =>  $data,
        ]);
    }

    public function searchAdmin(Request $request)
    {
        $key = "%" . $request->abc . "%";

        // $data   =Admin::select('id','ho_va_ten','email','password','ngay_sinh','so_dien_thoai','tinh_trang',)
        //     ->where('ho_va_ten', 'like', $key)
        //     ->get();
        $data = Admin::where('ho_va_ten','like', $key)
                    ->orWhere('email','like', $key)
                    ->orWhere('ngay_sinh','like', $key)
                    ->orWhere('so_dien_thoai','like', $key)
                    ->get();
        return response()->json([
            'admins'  =>  $data,
        ]);
    }

    public function createAdmin(Request $request)
    {
       Admin::create([
        'ho_va_ten' => $request->ho_va_ten,
        'email'     => $request->email,
        'password'  => $request->password,   
        'ngay_sinh' => $request->ngay_sinh,
        'so_dien_thoai' => $request->so_dien_thoai,
        'tinh_trang' => $request->tinh_trang,
            
        ]);

        return response()->json([
            'status'            =>   true,
            'message'           =>   'Đã tạo mới Admin thành công!',
        ]);
    }
    public function xoaAdmin($id){
        try {
            Admin::where('id', $id)->delete();
            return response()->json([
                'status'   => true,
                'message'  => 'xóa Admin thành công'
            ]);
        } catch (Exception $e) {
            Log::info("Lỗi", $e);
            return response()->json([
                'status'   => false,
                'message'  => 'xóa Admin không thành công'
            ]);
        }
    }
    public function capNhatAdmin(Request $request)
    {
        try {
            Admin::where('id', $request->id)
                ->update([
                    'ho_va_ten' => $request->ho_va_ten,
                    'email' => $request->email,
                    'password' => $request->password,   
                    'ngay_sinh' => $request->ngay_sinh,
                    'so_dien_thoai' => $request->so_dien_thoai,
                    'tinh_trang' => $request->tinh_trang,
                ]);
            return response()->json([
                'status'            =>   true,
                'message'           =>   'Đã cập nhật thành công ' . $request->ho_va_ten,
            ]);
        } catch (Exception $e) {
            Log::info("Lỗi", $e);
            return response()->json([
                'status'            =>   false,
                'message'           =>   'Có lỗi',
            ]);
        }
    }
    public function doiTrangThaiAdmin(Request $request)
    {
        try {
            if ($request->tinh_trang == 1) {
                $tinh_trang_moi = 0;
            } else {
                $tinh_trang_moi = 1;
            }
            Admin::where('id', $request->id)
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
