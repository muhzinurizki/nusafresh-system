<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product; // Pastikan ini di-import untuk route '/'

// Halaman Landing Page (Home)
Route::get('/', function () {
    // Ambil 4 produk terbaru yang aktif untuk ditampilkan di section "Katalog Unggulan"
    $products = Product::where('is_active', true)
                       ->latest()
                       ->take(4)
                       ->get();

    return view('welcome', compact('products'));
});

// Halaman Katalog Lengkap
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Halaman Detail Produk (Opsional - Bagus untuk SEO dan User Experience)
Route::get('/products/{product:slug}', [ProductController::class, 'show'])->name('products.show');

// Halaman Layanan
Route::get('/services', function () {
    return view('services.index'); 
})->name('services.index');