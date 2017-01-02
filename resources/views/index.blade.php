@extends('layouts.master')
@section('content')
    <div id="body" class="home">
        <div class="header">
            <img src="images/bg-home.jpg" alt="">
            <div>
                <a href="danh_sach.html">Freeze Delight</a>
            </div>
        </div>
        <div class="body">
            <div>
                <div>
                    <h1>Sản phẩm mới</h1>
                    <h2>Sữa chua vị trái cây</h2>
                    <p>sữa chua được làm từ sữa tươi tự nhiên, sản xuất và lên men theo quy trình đạt chuẩn chấu âu, mùi vị thơm ngon, bổ dưỡng tốt cho sức khỏe</p>
                </div>
                <img src="images/yogurt.jpg" alt="">
            </div>
        </div>
        <div class="footer">
            <div>
                <ul>
                    <li>
                        <a href="danh_sach.html" class="product"></a>
                        <h1>SẢN PHẨM</h1>
                    </li>
                    <li>
                        <a href="chi_tiet.html" class="about"></a>
                        <h1>CÔNG DỤNG</h1>
                    </li>
                    <li>
                        <a href="danh_sach.html" class="flavor"></a>
                        <h1>HƯƠNG VỊ</h1>
                    </li>
                    <li>
                        <a href="lien_he.html" class="contact"></a>
                        <h1>ĐỊA ĐIỂM</h1>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @endsection