<?php

use App\Http\Controllers\UserController;
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
    return view('user', ['title' => 'sayurmurah.com']);
});

Route::get('admin', function () {
    return view('admin/dashboard');
});
Route::get('admin/akun', function () {
    return view('admin/kelolaakun/akun');
});
Route::get('admin/tambahakun', function () {
    return view('admin/kelolaakun/tambahakun');
});
Route::get('admin/detailakun', function () {
    return view('admin/kelolaakun/detailakun');
});

Route::get('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'login']);
