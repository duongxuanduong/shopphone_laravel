<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route ::prefix('admin')->namespace('Admin')->group(function(){
    route:: resource('/','HomeController')->only('index');
    route:: resource('banner','BannerController');
    route:: resource('nguoidung','NguoidungController');
    route:: resource('loaisanpham','LoaisanphamController');
    route:: resource('login','LoginController')->only('index');
    route:: resource('sanpham','SanphamController');
    route:: resource('khuyenmai','KhuyenmaiController');
    route:: resource('hoadon','HoadonController');
    route:: resource('lienhe','LienheController');
});
