@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="header">
            <div>
                <h1>Các Hương Vị Của Sữa Chua</h1>
            </div>
        </div>
        <ul>
            @foreach($sanxuats as $sanxuat)
                <li>
                    <h1><a href="nhasx-{{$sanxuat->id}}">{{$sanxuat->tennhasx}}</a></h1>
                </li>
            @endforeach
        </ul>
        <div>
            @foreach($sanphams as $sanpham)
            @endforeach
            <ul>
                <li>
                    <h1>{{$sanpham->tennhasx}}</h1>
                </li>
                @foreach($sanphams as $sanpham)
                    <li>
                        <a href="sanpham-{{$sanpham->idSP}}" ><img src="images/kiwi.jpg" alt=""></a>
                        <a href="sanpham-{{$sanpham->idSP}}" ><h2>{{$sanpham->tensp}}</h2></a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-sm-12">
            <ul class="pagination">
                @if($sanphams->currentPage() !=1)
                    <li><a href="{!! $sanphams->url($sanphams->currentPage()-1) !!}"><<</a> </li>
                @endif
                @for($i = 1; $i <= $sanphams->lastPage(); $i = $i+1)
                    <li class="{!! ($sanphams->currentPage() == $i) ? "active" : "" !!}"><a href="{!! $sanphams->url($i) !!}">{!! $i !!}</a> </li>
                @endfor
                @if($sanphams->currentPage() != $sanphams->lastPage())
                    <li><a href="{!! $sanphams->url($sanphams->currentPage()+1) !!}">>></a> </li>
                @endif
            </ul>
        </div>
    </div>
@endsection