<?php

namespace App\Http\Controllers;
use App\Models\GiangVien;
use Illuminate\Http\Request;

class GiangVienController extends Controller
{
    function danhSach(){
        $dsGiangVien=GiangVien::all();
        return view('danh-sach-giang-vien',compact('dsGiangVien'));
    }
    function formThemMoi(){
        return view('them-moi-giang-vien');
    }

    function themMoi(Request $req){
        $giangVien = new GiangVien;
        $giangVien ->ho_ten = $req->ho_ten;
        $giangVien ->ten_dang_nhap = $req->ten_dang_nhap;
        $giangVien ->mat_khau = $req->mat_khau;
        $giangVien ->email = $req->email;
        $giangVien->save();
        return redirect()->route('ds-giang-vien');
    }

    function formCapNhat($id){
        $giangVien = GiangVien::find($id);
        if($giangVien==null)
        {
            return "Khong tim thay giang vien co id = {$id}";
        }
        return view('cap-nhat-giang-vien',compact('giangVien'));
    }
    function capNhat(Request $req , $id){
        $giangVien=GiangVien::find($id);
        if($giangVien==null)
        {
            return "Khong tim thay giang vien co id = {$id}";
        }
        $giangVien->ho_ten=$req->ho_ten;
        $giangVien->email=$req->email;

        $giangVien->save();

        return redirect()->route('ds-giang-vien');
    }
}
