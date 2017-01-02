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
                <img src="images/mango.jpg" alt="">
                <h1>Sữa Chua Hương Xoài</h1>
                <h3>Thành Phần</h3>
                <p> gồm sữa chua lên men tự nhiên, hương trái xoài, đường mía, một số chất phụ gia khác</br></p>
                <p>sau khi mua sản phẩm bạn sẽ được tặng một trái dâu tây ăn kèm</br></p>
                <h3>Các loại size</h3>
                <p> Hộp 150gr&nbsp;&nbsp;&nbsp;&nbsp;Giá: <b>25.000 Đ</b></p>
                <p> Hộp 350gr&nbsp;&nbsp;&nbsp;&nbsp;Giá: <b>50.000 Đ</b></p>
                <p> Hộp 750gr&nbsp;&nbsp;&nbsp;&nbsp;Giá: <b>100.000 Đ</b></p>
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