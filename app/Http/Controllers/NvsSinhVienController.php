<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NvsSinhVienController extends Controller
{
    public function nvsList()
    {
    // lấy toàn bộ danh sách sinh viên
    $nvsSinhVien = NvsSinhVien::all();

    return view('NvsSinhVien.nvs-list',['nvsSinhViens'=>$nvsSinhVien]);
    }
    //create insert
    public function nvsCreate()
    {
        return view('NvsSinhVien.nvs-create');
    }
    // create submit
    public function nvsCreateSubmit(Request $request)
    {
        //lấy dữ liệu submit trên form, gán cho các thuộc tính của đối tượng sinh viên
        $nvsSinhVien = new NvsSinhVien()
        $nvsSinhVien->nvsMaSV = $request->nvsMaSV;
        $nvsSinhVien->nvsHoSV = $request->nvsHoSV;
        $nvsSinhVien->nvsTenSV = $request->nvsTenSV;
        $nvsSinhVien->nvsPhai = $request->nvsPhai;
        $nvsSinhVien->nvsNgaySinh = $request->nvsNgaySinh;
        $nvsSinhVien->nvsNoiSinh = $request->nvsNoiSinh;
        $nvsSinhVien->nvsMaKH = $request->nvsMaKH;
        //ghi vào bảng trong csdl
        $nvsSinhVien->sava();
        return back()->with('NvsSinhVien_created','đã thêm mới thành công');
    }
}
