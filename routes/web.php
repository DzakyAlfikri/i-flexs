<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenyimpananController;
use App\Http\Controllers\WarnaController;
use App\Http\Controllers\IphoneController;
use App\Http\Controllers\VariasiIphoneController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\SuccesController;
use App\Http\Controllers\TransaksiController;

// Ubah route home ke HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'index'])->name('product');
Route::get('/detailproduct/{id}', [DetailProductController::class, 'show'])->name('detailproduct');
Route::get('/pesan', [PesanController::class, 'index'])->name('pesan');
Route::get('/succes', [SuccesController::class, 'index'])->name('success');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
     Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'userMiddleware'])->group(function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth', 'adminMiddleware'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    
    // Kategori routes
    Route::resource('/admin/kategoris', KategoriController::class, [
        'names' => [
            'index' => 'kategoris.index',
            'create' => 'kategoris.create', 
            'store' => 'kategoris.store',
            'edit' => 'kategoris.edit',
            'update' => 'kategoris.update',
            'destroy' => 'kategoris.destroy'
        ]
    ]);

    // Penyimpanan routes
    Route::resource('/admin/penyimpanans', PenyimpananController::class, [
        'names' => [
            'index' => 'penyimpanans.index',
            'create' => 'penyimpanans.create',
            'store' => 'penyimpanans.store',
            'edit' => 'penyimpanans.edit',
            'update' => 'penyimpanans.update',
            'destroy' => 'penyimpanans.destroy'
        ]
    ]);

    // Warna routes
    Route::resource('/admin/warnas', WarnaController::class, [
        'names' => [
            'index' => 'warnas.index',
            'create' => 'warnas.create',
            'store' => 'warnas.store',
            'edit' => 'warnas.edit',
            'update' => 'warnas.update',
            'destroy' => 'warnas.destroy'
        ]
    ]);

    // Iphone routes
    Route::resource('/admin/iphones', IphoneController::class, [
        'names' => [
            'index' => 'iphones.index',
            'create' => 'iphones.create',
            'store' => 'iphones.store',
            'edit' => 'iphones.edit',
            'update' => 'iphones.update',
            'destroy' => 'iphones.destroy'
        ]
    ]);

    // Variasi Iphone routes
    Route::resource('admin/variasi-iphones', VariasiIphoneController::class, [
        'names' => [
            'index' => 'variasi-iphones.index',
            'create' => 'variasi-iphones.create',
            'store' => 'variasi-iphones.store',
            'edit' => 'variasi-iphones.edit',
            'update' => 'variasi-iphones.update',
            'destroy' => 'variasi-iphones.destroy'
        ]
    ]);

    // Transaksi routes
    Route::get('/admin/transaksi', [TransaksiController::class, 'index'])->name('admin.transaksi.index');
    Route::patch('/admin/transaksi/{transaksi}/status', [TransaksiController::class, 'updateStatus'])
        ->name('admin.transaksi.update-status');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/pesan', [PesanController::class, 'store'])->name('pesan.store');
});

