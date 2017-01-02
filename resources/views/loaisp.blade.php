@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="header">
            <div>
                <h1>Các Hương Vị Của Sữa Chua</h1>
            </div>
        </div>
            @foreach($loaisps as $loaisp)
                <ul>
                    <li>
                        <h1><a href="loaisp-{{$loaisp->id}}">{{$loaisp->tenloai}}</a></h1>
                    </li>
                </ul>
            @endforeach
        <div>
            @foreach($sanphams as $sanpham)
            @endforeach
                <ul>
                    <li>
                        <h1>{{$sanpham->tenloai}}</h1>
                    </li>
                 @foreach($sanphams as $sanpham)
                        <li>
                            <a href="sp1.html" ><img src="images/kiwi.jpg" alt=""></a>
                            <a href="sp1.html" ><h2>{{$sanpham->tensp}}</h2></a>
                        </li>
                    @endforeach
                </ul>
        </div>
    </div>
@endsection