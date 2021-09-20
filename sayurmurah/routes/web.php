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
// Route::get('admin', function () {
//     return view('admin/dashboard');
// });

// Route::get('admin/akun', function () {
//     return view('admin/kelolaakun/akun');
// });
// Route::get('admin/tambahakun', function () {
//     return view('admin/kelolaakun/tambahakun');
// });
// Route::get('admin/detailakun', function () {
//     return view('admin/kelolaakun/detailakun');
// });

// ADMIN
// Route ke Dashboard Admin
Route::get('admin', [AdminController::class, 'index'])->name('admin.show');

// LOGIN & REGISTER
// Route ke Halaman Register
Route::get('register', [AkunController::class, 'showRegister'])->name('regis.show');
// Route ke function register / Daftar Akun
Route::post('register', [AkunController::class, 'Register'])->name('regis');
// Route ke Halaman Login
Route::get('login', [AkunController::class, 'showLogin'])->name('login.show');
// Route ke function Login
Route::post('login', [AkunController::class, 'Login'])->name('login');
// Route ke function Logout
Route::get('logout', [AkunController::class, 'Logout'])->name('logout');
