<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GiaoVien;

class GiaoVienController extends Controller
{
    public function index(Request $request)
    {
        $query = GiaoVien::query();

        if ($request->has('search')) {
            $query->where('Hoten', 'like', '%' . $request->get('search') . '%');
        }

        $giaovien = $query->paginate(5);

        return view('giaovien.index', compact('giaovien'));
    }
    public function create()
{
    return view('giaovien.create');
}

public function store(Request $request)
{
    $request->validate([
        'MaGiaoVien' => 'required|unique:giaovien',
        'Hoten' => 'required',
        'NgaySinh' => 'required',
        'GioiTinh' => 'required',
        'Phone' => 'required',
        'DiaChi' => 'required',
        'TaiKhoan' => 'required',
        'MatKhau' => 'required',
    ],
     [
        'MaGiaoVien.unique' => 'Mã giáo viên đã tồn tại, vui lòng nhập lại',
    ]
);

    GiaoVien::create($request->all());

    return redirect()->route('giaovien.index')
                    ->with('success','GiaoVien created successfully.');
}
public function destroy($id)
{
    $giaovien = GiaoVien::find($id);
    $giaovien->delete();

    return redirect()->route('giaovien.index');
}

}



