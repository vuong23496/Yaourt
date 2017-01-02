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
                <img src="images/blueberry.jpg" alt="">
                <h1>Sữa Chua Hương Việt Quất</h1>
                <h3>Thành Phần</h3>
                <p> gồm sữa chua lên men tự nhiên, hương việt quất, đường mía, một số chất phụ gia khác</br></p>
                <p>sản phảm ăn kèm với giâu tây, việt quất, dâu tằm</br></p>
                <h3>Các loại size</h3>
                <p> Hộp 150gr&nbsp;&nbsp;&nbsp;&nbsp;Giá: <b>35.000 Đ</b></p>
                <p> Hộp 350gr&nbsp;&nbsp;&nbsp;&nbsp;Giá: <b>65.000 Đ</b></p>
                <p> Hộp 750gr&nbsp;&nbsp;&nbsp;&nbsp;Giá: <b>115.000 Đ</b></p>
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