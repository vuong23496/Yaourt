@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="header">
            <div>
                <h1>Các Hương Vị Của Sữa Chua</h1>
            </div>
        </div>
        <div>
            @foreach($nhasanxuats as $nhasx)
                <ul>
                    <li>
                        <h1><a href="nhasx-{{$nhasx->id}}">{{$nhasx->tennhasx}}</a></h1>
                    </li>
                </ul>
            @endforeach
        </div>
    </div>
@endsection