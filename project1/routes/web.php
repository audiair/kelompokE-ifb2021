<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiController;

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

Route::get('/home', function () {
    return view('layouts.layout');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('index');

    Route::get('/cabangs', [CabangController::class, 'index'])->name('cabangs');
    Route::get('/cabangs/create', [CabangController::class, 'create'])->name('cabang.create');
    Route::post('/cabangs', [CabangController::class, 'store'])->name('cabang.store');
    Route::get('/cabangs/{id}/edit', [CabangController::class, 'edit'])->name('cabang.edit');
    Route::match(['put', 'patch'], '/cabangs/{id}', [CabangController::class, 'update'])->name('cabang.update');
    Route::delete('/cabangs/{id}', [CabangController::class, 'destroy'])->name('cabang.destroy');

    Route::get('/barangs', [BarangController::class, 'index'])->name('barangs');
    Route::get('/barangs/create', [BarangController::class, 'create'])->name('barang.create');
    Route::post('/barangs', [BarangController::class, 'store'])->name('barang.store');
    Route::get('/barangs/{kode}/edit', [BarangController::class, 'edit'])->name('barang.edit');
    Route::match(['put', 'patch'], '/barangs/{kode}', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('/barangs/{kode}', [BarangController::class, 'destroy'])->name('barang.destroy');

    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/users', [UserController::class, 'store'])->name('user.store');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('user.destroy');

    Route::get('/transaksis', [TransaksiController::class, 'index'])->name('transaksis');
    Route::get('/transaksis/create', [TransaksiController::class, 'create'])->name('transaksi.create');
    Route::post('/transaksis', [TransaksiController::class, 'store'])->name('transaksi.store');
    Route::delete('/transaksis/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');
});  


require __DIR__.'/auth.php';
