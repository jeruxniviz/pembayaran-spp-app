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
    return view('pages.login',[
        'title' => 'Login'
    ]);
});

Route::get('beranda', function () {
    return view('user.home',[
        'title' => 'Beranda'
    ]);
});

Route::get('profil', function () {
    return view('user.profil',[
        'title' => 'Profil'
    ]);
});

Route::get('map', function () {
    return view('user.maps',[
        'title' => 'Map'
    ]);
});

Route::get('pembayaran', function () {
    return view('user.pembayaran',[
        'title' => 'Pembayaran'
    ]);
});

Route::get('riwayat', function () {
    return view('user.riwayat',[
        'title' => 'Riwayat'
    ]);
});
