<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProduk;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
Route::get('/contoh', function () {
    return view('welcome');
});

Route::get('/produk', function () {
    return view('produk.index');
});

Route::get('/harga', function () {
    return view('produk.harga');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);


// ADMIN PAGE
Route::group(['prefix'=> 'admin','middleware'=>['auth']], function(){
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/feedback', [DashboardController::class, 'feedback']);
    Route::get('/post', [DashboardController::class, 'post']);
    Route::get('/setting', [DashboardController::class, 'setting']);
    
    Route::get('/produk', [DashboardProduk::class, 'index']);
    Route::post('/produk', [DashboardProduk::class, 'postHandler']);
});