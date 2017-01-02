<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class nhasxcontroller extends Controller
{
    public function  show_nha_sx(){
        $nhasx=DB::select('select * from nhasanxuat');
        return view('Nha_SX',['nhasanxuats'=>$nhasx]);
    }
    public function  show_sp_nha_sx($idnhasx){
        $nha_sx=DB::table('sanpham')
            ->join('nhasanxuat','nhasanxuat.id','sanpham.nhasx')
            ->where('nhasanxuat.id','=',$idnhasx)
            ->paginate(3);
        $sanxuat=DB::table('nhasanxuat')
             ->get();
        return view('show_sp_nha_sx',['sanphams'=>$nha_sx,'sanxuats'=>$sanxuat]);
    }
}
