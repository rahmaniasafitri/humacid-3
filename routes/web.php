<?php

use App\Http\Controllers\HomeController;
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
