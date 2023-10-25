<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PembelianController;

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

Route::get('/', [ProdukController::class, 'home'])->name('homeproduk');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('/user/tampil', [UserController::class, 'index'])->name('indexUser')->middleware('auth');
Route::get('/user/input', [UserController::class, 'input'])->name('inputUser')->middleware('auth');
Route::post('/user/storeinput', [UserController::class, 'storeinput'])->name('storeInputUser')->middleware('auth');
Route::get('/user/update/{id}', [UserController::class, 'update'])->name('updateUser')->middleware('auth');
Route::post('/user/storeupdate', [UserController::class, 'storeupdate'])->name('storeUpdateUser')->middleware('auth');
Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('deleteUser')->middleware('auth');

Route::get('/produk/tampil', [ProdukController::class, 'index'])->name('indexproduk')->middleware('auth');
Route::get('/produk/input', [ProdukController::class, 'input'])->name('inputproduk')->middleware('auth');
Route::post('/produk/storeinput', [ProdukController::class, 'storeinput'])->name('storeInputproduk')->middleware('auth');
Route::get('/produk/update/{id}', [ProdukController::class, 'update'])->name('updateproduk')->middleware('auth');
Route::post('/produk/storeupdate', [ProdukController::class, 'storeupdate'])->name('storeUpdateproduk')->middleware('auth');
Route::get('/produk/delete/{id}', [ProdukController::class, 'delete'])->name('deleteproduk')->middleware('auth');
Route::get('/produk/upload', [ProdukController::class, 'upload'])->name('upload')->middleware('auth');
Route::post('/produk/uploadproses', [ProdukController::class, 'uploadproses'])->name('uploadproses')->middleware('auth');

Route::get('/pembelian/tampil', [PembelianController::class, 'index'])->name('indexpembelian')->middleware('auth');
Route::get('/pembelian/input', [PembelianController::class, 'input'])->name('inputpembelian')->middleware('auth');
Route::post('/pembelian/storeinput', [PembelianController::class, 'storeinput'])->name('storeInputpembelian')->middleware('auth');
Route::get('/pembelian/update/{id}', [PembelianController::class, 'update'])->name('updatepembelian')->middleware('auth');
Route::post('/pembelian/storeupdate', [PembelianController::class, 'storeupdate'])->name('storeUpdatepembelian')->middleware('auth');
Route::get('/pembelian/delete/{id}', [PembelianController::class, 'delete'])->name('deletepembelian')->middleware('auth');