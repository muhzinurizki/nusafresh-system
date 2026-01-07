<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Ambil input pencarian jika ada
        $search = $request->input('search');

        // Query dasar: hanya ambil produk yang aktif
        $products = Product::where('is_active', true);

        // Jika ada pencarian, jalankan Scope Search di Model
        if ($search) {
            $products->search($search);
        }

        // Ambil data dengan pagination agar website tetap ringan
        $data = $products->latest()->paginate(12)->withQueryString();

        return view('products.index', [
            'products' => $data,
            'search' => $search
        ]);
    }

    public function show(Product $product)
    {
        // Untuk halaman detail produk (jika dibutuhkan)
        return view('products.show', compact('product'));
    }
}