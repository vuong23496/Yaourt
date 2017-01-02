<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LoaiSPController extends Controller
{
    public function show(){
        $loaisp=DB::table('loaisp')
        ->get();
        return view('danh_sach',['loaisps'=>$loaisp]);
    }
    public function listLoaiSP($idloai){
        $sanpham=DB::table('sanpham')
            ->join('loaisp','loaisp.id','sanpham.loaisanpham')
            ->where('loaisp.id','like',$idloai)
            ->get();
        $loaisp=DB::table('loaisp')
            ->get();
        return view('loaisp',['sanphams'=>$sanpham,'loaisps'=>$loaisp]);
    }
}
