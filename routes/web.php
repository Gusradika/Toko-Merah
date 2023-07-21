<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\penjualanController;

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
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware('auth');



Route::get('/login', [loginController::class, "viewLogin"])->middleware('guest')->name('login');
Route::post('/auth', [loginController::class, "authenticate"])->middleware('guest');
Route::get('/logout', [loginController::class, "logout"])->middleware('auth');
Route::get('/list-barang', [barangController::class, "viewBarang"])->middleware('auth');
Route::get('/list-barang-minuman', [barangController::class, "viewBarangMinuman"])->middleware('auth');
Route::get('/list-barang-makanan', [barangController::class, "viewBarangMakanan"])->middleware('auth');
Route::get('/list-barang-sabunMandi', [barangController::class, "viewBarangSabunMandi"])->middleware('auth');
Route::get('/list-barang-sabunCuci', [barangController::class, "viewBarangSabunCuci"])->middleware('auth');
Route::get('/list-barang-rokok', [barangController::class, "viewBarangRokok"])->middleware('auth');

Route::get('/list-barang-es-krim', [barangController::class, "viewBarangEsKrim"])->middleware('auth');
Route::get('/list-barang-lain', [barangController::class, "viewBarangLainLain"])->middleware('auth');
Route::get('/cari-barang', [barangController::class, "cariBarang"]);

Route::get('/tambah-barang', [barangController::class, "viewTambahBarang"])->middleware('auth');
Route::post('/save-barang', [barangController::class, "saveBarang"])->middleware('auth');

Route::get('/editbarang/{barang:id}', [barangController::class, "viewEditBarangs"])->middleware('auth');
Route::post('/updateBarang', [barangController::class, "updateBarang"])->middleware('auth');
Route::post('/deleteBarang', [barangController::class, "deleteBarang"])->middleware('auth');


Route::get('/tambahPenjualan', [penjualanController::class, "viewTambahPenjualan"])->middleware('auth');
Route::get('/getBarang', [penjualanController::class, "getBarang"])->middleware('auth');
Route::get('/savePenjualan', [penjualanController::class, "savePenjualan"])->middleware('auth');

Route::get('/viewLaporan', [penjualanController::class, "viewLaporan"])->middleware('auth');
