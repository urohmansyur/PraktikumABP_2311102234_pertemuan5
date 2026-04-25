<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Models\Product; // ⬅️ TAMBAHAN
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// 🔥 DASHBOARD (SUDAH TERHUBUNG DATABASE)
Route::get('/dashboard', function () {
    $totalProduk = Product::count();
    $totalStock = Product::sum('stock');

    return view('dashboard', compact('totalProduk', 'totalStock'));
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // 🔥 CRUD PRODUK (WAJIB)
    Route::resource('products', ProductController::class);

    // PROFILE (DEFAULT BREEZE)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';