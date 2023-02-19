<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReservationController;

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
    return view('home.guest.guest-home-page');
})->middleware('guest');

// Auth Routes
Route::get('/view/login-page',[AuthController::class,'view_login_page'])->name('login_page')->middleware('guest');
Route::post('/login',[AuthController::class,'login'])->name('login_submit')->middleware('guest');

Route::get('/view/signup-page',[AuthController::class,'view_signup_page'])->name('signup_page')->middleware('guest');
Route::post('/signup',[AuthController::class,'signup'])->name('signup_submit')->middleware('guest');
// End Of Auth Routes

// User Activity
Route::get('/user_home',[UserController::class,'user_home_page'])->name('user_home')->middleware('user');
Route::get('/logout', [UserController::class, 'logout'])->name('user_logout')->middleware('auth');

Route::get('/view/reservasi-page', [ReservationController::class, 'reservasi_page'])->name('reservasi_page')->middleware('user');
Route::post('/reservasi', [ReservationController::class, 'reservasi'])->name('reservasi')->middleware('user');

Route::get('/view/reservasi-saya/{id}', [UserController::class, 'reservasi_saya'])->name('reservasi_saya')->middleware('user');
// End Of User Activity

// Admin Activity
Route::get('/admin_home',[AdminController::class,'admin_home_page'])->name('admin_home')->middleware('admin');
Route::get('/search',[AdminController::class,'search'])->name('search')->middleware('admin');
Route::get('/update/{id}',[AdminController::class,'update_page'])->name('update_page')->middleware('admin');
Route::put('/update-status',[AdminController::class,'update_status_reservasi'])->name('update_status')->middleware('admin');
Route::get('/delete/{id}',[AdminController::class,'delete_reservasi'])->name('delete_reservasi')->middleware('admin');

Route::get('/view/tambah-jadwal-reservasi',[AdminController::class,'tambah_jadwal_reservasi'])->name('tambah_jadwal_reservasi')->middleware('admin');
Route::get('/delete-tanggal/{id}',[AdminController::class,'hapus_tanggal'])->name('hapus_tanggal')->middleware('admin');
Route::post('/tambah-tanggal',[AdminController::class,'tambah_tanggal'])->name('tambah_tanggal')->middleware('admin');
Route::post('/tambah-jam',[AdminController::class,'tambah_jam'])->name('tambah_jam')->middleware('admin');
// End Of Admin Activity