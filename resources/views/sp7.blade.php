@extends('layouts.app')
@section('content')
    <div id="body">
        <div class="header">
            <div>
                <h1>Chi Tiết Sản Phẩm</h1>
            </div>
        </div>
        <div class="singlepost">
            <div class="featured">
                <img src="images/grapes.jpg" alt="">
                <h1>Sữa Chua Thập Cẩm Hương Khoai Môn</h1>
                <h3>Thành Phần</h3>
                <p> gồm sữa chua lên men tự nhiên, hương khoai môn, đường mía, một số chất phụ gia khác</br></p>
                <p>sản phảm ăn kèm với 6 loại quả dâu tây, dưa gang, xoài, táo kiwi và việt quất</br></p>
                <h3>Các loại size</h3>
                <p> Hộp 150gr&nbsp;&nbsp;&nbsp;&nbsp;Giá: <b>40.000 Đ</b></p>
                <p> Hộp 350gr&nbsp;&nbsp;&nbsp;&nbsp;Giá: <b>70.000 Đ</b></p>
                <p> Hộp 750gr&nbsp;&nbsp;&nbsp;&nbsp;Giá: <b>120.000 Đ</b></p>
                <h3>Bảo Quản</h3>
                <p>Bảo quản ở nhiệt từ 0->20 độ</p>
                <a href="danh_sach.html" class="load">Xem Sản Phẩm</a>

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