@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="header">
            <div>
                <h1>Các Hương Vị Của Sữa Chua</h1>
            </div>
        </div>
        <div>
            @foreach($loaisps as $loaisp)
                <ul>
                    <li>
                        <h1><a href="loaisp-{{$loaisp->id}}">{{$loaisp->tenloai}}</a></h1>
                    </li>
                </ul>
            @endforeach
        </div>
    </div>
@endsection