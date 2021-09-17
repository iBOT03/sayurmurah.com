<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AkunController;
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
    return view('user', ['title' => 'sayurmurah.com'])->name('home');
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
Route::get('admin', [AdminController::class, 'index'])->name('admin.show');
Route::get('register', [AkunController::class, 'showRegister'])->name('regis.show');
Route::post('register', [AkunController::class, 'Register'])->name('regis');
Route::get('login', [AkunController::class, 'showLogin'])->name('login.show');
Route::post('login', [AkunController::class, 'Login'])->name('login');

