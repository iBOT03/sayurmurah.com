<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\User\HomeController;
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
Route::get('/', [HomeController::class, 'index']);

Route::get('registrasi', function () {
    return view('userRegister');
});


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
