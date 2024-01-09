<?php

namespace App\Http\Controllers;

use App\Models\theloai;
use Illuminate\Http\Request;

class ChiTietSachController extends Controller
{
    public function getDataTheLoai(Request $request)
    {
        $the_loai = theloai::join('saches', 'theloais.id', 'saches.id_the_loai')
            ->where('saches.id_the_loai', $request->id)
            ->where('saches.tinh_trang', 1)
            ->select('saches.*')
            ->get();
        return response()->json([
            'xx'      => $request->all(),
            'data'    => $the_loai,
        ]);
    }
}
