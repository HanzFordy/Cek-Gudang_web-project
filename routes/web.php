<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('index');
})->name('index');
//Login-Logout
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
//register
Route::get('/register', [RegisterController::class, 'registrasi'])->name('register');
Route::post('/actionRegistrasi', [RegisterController::class, 'actionRegistrasi'])->name('actionRegistrasi');


Route::get('/dashboard', [App\Http\Controllers\SupplierController::class, 'tampilHitung'])->name('dashboard')->middleware('auth');
Route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'index'])->name('supplier')->middleware('auth');
Route::get('/barang', [App\Http\Controllers\BarangController::class, 'index'])->name('barang')->middleware('auth');
Route::get('/stok', [App\Http\Controllers\StokBarangController::class, 'index'])->name('stok')->middleware('auth');

//Supplier
Route::get('/tambahsupplier', [App\Http\Controllers\SupplierController::class, 'tambah'])->name('tambahsupplier')->middleware('auth');
Route::post('/simpansupplier', [App\Http\Controllers\SupplierController::class, 'simpan'])->name('simpansupplier')->middleware('auth');
Route::get('/ubahsupplier/{id}', [App\Http\Controllers\SupplierController::class, 'ubah'])->name('ubahsupplier')->middleware('auth');
Route::post('/updatesupplier', [App\Http\Controllers\SupplierController::class, 'update'])->name('updatesupplier')->middleware('auth');
Route::get('/hapussupplier/{id}', [App\Http\Controllers\SupplierController::class, 'hapus'])->name('hapussupplier')->middleware('auth');

//Barang
Route::get('/tambahBarang', [App\Http\Controllers\BarangController::class, 'tambahBarang'])->name('tambahBarang')->middleware('auth');
Route::post('/simpanBarang', [App\Http\Controllers\BarangController::class, 'simpan'])->name('simpanBarang')->middleware('auth');
Route::get('/ubahBarang/{id}', [App\Http\Controllers\BarangController::class, 'ubahBarang'])->name('ubahBarang')->middleware('auth');
Route::post('/update', [App\Http\Controllers\BarangController::class, 'updateBarang'])->name('updateBarang')->middleware('auth');
Route::get('/hapusBarang/{id}', [App\Http\Controllers\BarangController::class, 'hapusBarang'])->name('hapusBarang')->middleware('auth');
//Stok
Route::get('/tambahStok', [App\Http\Controllers\StokBarangController::class, 'tambahStok'])->name('tambahStok')->middleware('auth');
Route::post('/simpanStok', [App\Http\Controllers\StokBarangController::class, 'simpan'])->name('simpanStok')->middleware('auth');
Route::get('/ubahStok/{id}', [App\Http\Controllers\StokBarangController::class, 'ubahStok'])->name('ubahStok')->middleware('auth');
Route::post('/updateStok', [App\Http\Controllers\StokBarangController::class, 'updateStok'])->name('updateStok')->middleware('auth');
Route::get('/hapusStok/{id}', [App\Http\Controllers\StokBarangController::class, 'hapusStok'])->name('hapusStok')->middleware('auth');