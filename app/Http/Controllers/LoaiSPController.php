<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LoaiSPController extends Controller
{
    public function show(){
        $loaisp=DB::select('select * from loaisp');
        return view('danh_sach',['loaisps'=>$loaisp]);
    }

   public function showtheoloai($idloai){
        $abc=DB::table('sanpham')
            ->join('loaisp', 'loaisp.id', 'sanpham.loaisanpham' )
            ->where('sanpham.loaisanpham','=',$idloai)
            ->paginate (3);
        $bcd=DB::table('loaisp')
            ->get();
         return view('loaisp',['sanphams'=>$abc,'loaisps'=>$bcd]);
            

   }
}