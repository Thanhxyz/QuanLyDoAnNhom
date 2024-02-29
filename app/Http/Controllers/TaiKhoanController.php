<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaiKhoan;

class TaiKhoanController extends Controller
{
    public function index()
    {
        $taikhoans = Taikhoan::paginate(5);
        return view('taikhoan.index', compact('taikhoans'));
    }
    

    public function store(Request $request)
    {
        TaiKhoan::create($request->all());
        return redirect()->route('taikhoan.index');
    }

    public function destroy($TaiKhoan)
{
    $taikhoan = TaiKhoan::where('TaiKhoan', $TaiKhoan)->firstOrFail();
    $taikhoan->delete();
    return redirect()->route('taikhoan.index');
}


}
