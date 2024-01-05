<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\BarangMasukController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});  

Route::get('/dashboard', function () {
    return view('layouts.layout');
});
Route::get('/cabangs', [CabangController::class, 'index'])->name('index');

Route::get('/barangs', [BarangController::class, 'index'])->name('barangs');
Route::get('/barangs/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barangs', [BarangController::class, 'store'])->name('barang.store');
Route::get('/barangs/{kode}/edit', [BarangController::class, 'edit'])->name('barang.edit');
Route::match(['put', 'patch'], '/barangs/{kode}', [BarangController::class, 'update'])->name('barang.update');
Route::delete('/barangs/{kode}', [BarangController::class, 'destroy'])->name('barang.destroy');

Route::get('/stocks', [StockController::class, 'index'])->name('stocks');
Route::get('/stocks/create', [StockController::class, 'create'])->name('stock.create');
Route::post('/stocks', [StockController::class, 'store'])->name('stock.store');
Route::delete('/stocks/{id}', [StockController::class, 'destroy'])->name('stock.destroy');

Route::get('/barang_masuks', [BarangMasukController::class, 'index'])->name('barang_masuks');
Route::get('/barang_masuks/create', [BarangMasukController::class, 'create'])->name('barang_masuk.create');
Route::post('/barang_masuks', [BarangMasukController::class, 'store'])->name('barang_masuk.store');
Route::get('/barang_masuks/{id}/edit', [BarangMasukController::class, 'edit'])->name('barang_masuk.edit');
Route::match(['put', 'patch'], '/barang_masuks/{id}', [BarangMasukController::class, 'update'])->name('barang_masuk.update');
Route::delete('/barang_masuks/{id}', [BarangMasukController::class, 'destroy'])->name('barang_masuk.destroy');

require __DIR__.'/auth.php';
