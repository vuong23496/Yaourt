@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="header">
            <div>
                <h1>Chi Tiết Sản Phẩm</h1>
            </div>
        </div>
        <div class="singlepost">
            <div class="featured">
                <img src="images/kiwi.jpg" alt="">
                @foreach($sanpham as $sanpham)
                <h1>{{$sanpham->tensp}}</h1>
                <h3>Thành Phần</h3>
                <p> {{$sanpham->motachitiet}}</p>
                <h3>GIá</h3>
                <p>{{$sanpham->giasp}}</p>
                <h3>Bảo Quản</h3>
                <p>Bảo quản ở nhiệt từ 0->20 độ</p>
                <a href="danh_sach" class="load">Xem Sản Phẩm</a>
                @endforeach
            </div>
            <div class="sidebar">
                <h1>Recent Posts</h1>
                <img src="images/on-diet.png" alt="">
                <h2>ON THE DIET</h2>
                <span>Từ năm 1972</span>
                <p>sữa chua tự nhiên đảm bảo an toàn về sin thực phẩm </p>

            </div>
        </div>
    </div>
    @endsection()