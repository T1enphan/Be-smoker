<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Jenssegers\Agent\Agent;
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
        'password'  => bcrypt($request->password),
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
    public function check(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if ($user) {
            $agent = new Agent();
            $device     = $agent->device();
            $os         = $agent->platform();
            $browser    = $agent->browser();
            DB::table('personal_access_tokens')
                ->where('id', $user->currentAccessToken()->id)
                ->update([
                    'ip'            =>  request()->ip(),
                    'device'        =>  $device,
                    'os'            =>  $os,
                    'trinh_duyet'   =>  $browser,
                ]);
            return response()->json([
                'email'     =>  $user->email,
                'ho_ten'    =>  $user->ho_va_ten,
                'list'      =>  $user->tokens,
            ], 200);
        } else {
            return response()->json([
                'message'   =>  'Bạn cần đăng nhập hệ thống',
                'status'    =>  false,
            ], 401);
        }
    }

    public function removeToken($id)
    {
        try {
            DB::table('personal_access_tokens')
                ->where('id', $id)
                ->delete();
            return response()->json([
                'message'   =>  'Đã remove Token thành công !',
                'status'    =>  true,
            ]);
        } catch (Exception $e) {
            Log::info("Lỗi", $e);
        }
    }
    public function login(Request $request)
    {
        $check  = Auth::guard('admins')->attempt(['email' => $request->email, 'password' => $request->password]);
        // check sẽ trả về true hoặc false
        if ($check == true) {  // có
            // Lấy thông tin người đã nhập
            $user  = Auth::guard('admins')->user();
            $token = $user->createToken('api-token-longmap')->plainTextToken;
            return response()->json([
                'message'   =>  'đã đăng nhập!',
                'status'    =>  true,
                'token'     =>  $token,
                'user'      =>  $user,
            ]);
        } else {
            return response()->json([
                'message'   =>  'Đăng nhập thất bại!',
                'status'    =>  false
            ]);
        }
    }
}
