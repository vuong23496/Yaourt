<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SanPhamController extends Controller
{
   public function detail($idsp){
       $sanpham=DB::table('sanpham')
           ->join('loaisp','loaisp.id','sanpham.loaisanpham')
           ->where('sanpham.idSP','like',$idsp)
           ->get();
       return view('sanpham',['sanpham'=>$sanpham]);
   }
}
