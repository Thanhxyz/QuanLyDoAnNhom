<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lop;
use App\Models\Khoa;
use App\Models\GiaoVien;

class LopController extends Controller
{
    public function index()
{
    $lops = Lop::paginate(5);
    $khoas = Khoa::all();
    $giaoviens = GiaoVien::all();
    return view('lops.danhsach', ['lops' => $lops, 'khoas' => $khoas, 'giaoviens' => $giaoviens]);
}


public function update(Request $request, $MaLop)
{
    $lop = Lop::find($MaLop);
    $lop->TenLop = $request->input('TenLop');
    $lop->MaKhoa = $request->input('MaKhoa');
    $lop->MaGiaoVien = $request->input('MaGiaoVien');
    $lop->save();
    return redirect('/lops')->with('message', 'Lưu thành công');
}
    public function filter(Request $request)
    {
        $query = Lop::query();
    
        if ($request->input('MaLop')) {
            $query->where('MaLop', $request->input('MaLop'));
        }
    
        if ($request->input('TenLop')) {
            $query->where('TenLop', 'like', "%{$request->input('TenLop')}%");
        }
    
        if ($request->input('MaKhoa')) {
            $query->where('MaKhoa', $request->input('MaKhoa'));
        }
    
        if ($request->input('MaGiaoVien')) {
            $query->where('MaGiaoVien', $request->input('MaGiaoVien'));
        }
    
        $lops = $query->paginate(10);
        $khoas = Khoa::all();
        $giaoviens = GiaoVien::all();
        return view('lops.danhsach', ['lops' => $lops, 'khoas' => $khoas, 'giaoviens' => $giaoviens]);
    }

    public function destroy($MaLop)
    {
        $lop = Lop::find($MaLop);
        $lop->delete();
        return redirect('/lops');
    }

    public function create()
{
    $khoas = Khoa::all();
    $giaoviens = GiaoVien::all();
    return view('lops.create', ['khoas' => $khoas, 'giaoviens' => $giaoviens]);
}

public function store(Request $request)
{
    $lop = new Lop;
    $lop->MaLop = $request->input('MaLop');
    $lop->TenLop = $request->input('TenLop');
    $lop->MaKhoa = $request->input('MaKhoa');
    $lop->MaGiaoVien = $request->input('MaGiaoVien');
    $lop->save();
    return redirect('/lops')->with('message', 'Thêm lớp học thành công');
}

public function edit($MaLop)
{
    $lop = Lop::find($MaLop);
    $khoas = Khoa::all();
    $giaoviens = GiaoVien::all();
    return view('lops.edit', ['lop' => $lop, 'khoas' => $khoas, 'giaoviens' => $giaoviens]);
}
}