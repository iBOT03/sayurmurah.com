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

/* user */
Route::get('/', function () {
    return view('v_produk', ['title' => 'sayurmurah.com']);
});

Route::get('registrasi', function () {
    return view('userRegister');
});

Route::get('/login', function () {
    return view('v_login');
});




/* admin */
Route::get('admin', function () {
    return view('admin/dashboard');
});
Route::get('admin/akun', function () {
    return view('admin/kelolaakun/akun');
});
Route::get('admin/tambahakun', function () {
    return view('admin/kelolaakun/tambahakun');
});