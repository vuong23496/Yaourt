<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/index.html', function () {
    return view('index');
});

Route::get('/danh_sach.html', function () {
    return view('danh_sach');
});
Route::get('/thong_tin.html', function () {
    return view('thong_tin');
});
Route::get('/lien_he.html', function () {
    return view('lien_he');
});
Route::get('/sp1.html', function () {
    return view('sp1');
});
Route::get('/sp2.html', function () {
    return view('sp2');
});
Route::get('/sp3.html', function () {
    return view('sp3');
});
Route::get('/sp4.html', function () {
    return view('sp4');
});
Route::get('/sp5.html', function () {
    return view('sp5');
});
Route::get('/sp6.html', function () {
    return view('sp6');
});
Route::get('/sp7.html', function () {
    return view('sp7');
});
Route::get('/sp8.html', function () {
    return view('sp8');
});
Route::get('/sp9.html', function () {
    return view('sp9');
});



