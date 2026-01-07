<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Tomat Cherry Merah',
                'category' => 'Sayuran',
                'price' => 25000,
                'unit' => 'per 500g',
                'stock' => 50,
                'image' => 'https://images.unsplash.com/photo-1592924357228-91a4daadcfea?q=80&w=600',
                'description' => 'Tomat cherry segar pilihan dengan rasa manis keasaman yang pas.'
            ],
            [
                'name' => 'Wortel Brastagi Super',
                'category' => 'Sayuran',
                'price' => 18000,
                'unit' => 'per kg',
                'stock' => 100,
                'image' => 'https://images.unsplash.com/photo-1598170845058-32b9d6a5da37?q=80&w=600',
                'description' => 'Wortel renyah asal Brastagi, kaya akan Vitamin A.'
            ],
            [
                'name' => 'Bayam Hijau Organik',
                'category' => 'Sayuran',
                'price' => 8000,
                'unit' => 'per ikat',
                'stock' => 40,
                'image' => 'https://images.unsplash.com/photo-1576045057995-568f588f82fb?q=80&w=600',
                'description' => 'Bayam segar bebas pestisida, dipanen pagi hari.'
            ],
            [
                'name' => 'Jeruk Peras Sunkist',
                'category' => 'Buah',
                'price' => 35000,
                'unit' => 'per kg',
                'stock' => 25,
                'image' => 'https://images.unsplash.com/photo-1611080626919-7cf5a9dbab5b?q=80&w=600',
                'description' => 'Jeruk dengan kandungan air melimpah, sangat segar.'
            ],
            [
                'name' => 'Bawang Merah Brebes',
                'category' => 'Bumbu',
                'price' => 45000,
                'unit' => 'per kg',
                'stock' => 150,
                'image' => 'https://images.unsplash.com/photo-1508747703725-719777637510?q=80&w=600',
                'description' => 'Bawang merah kualitas ekspor asli dari Brebes.'
            ],
            [
                'name' => 'Telur Ayam Negeri',
                'category' => 'Lainnya',
                'price' => 28000,
                'unit' => 'per kg',
                'stock' => 200,
                'image' => 'https://images.unsplash.com/photo-1506976785307-8732e854ad03?q=80&w=600',
                'description' => 'Telur segar dari peternakan lokal, kualitas terjamin.'
            ],
        ];

        foreach ($products as $item) {
            Product::create([
                'name' => $item['name'],
                'slug' => Str::slug($item['name']),
                'category' => $item['category'],
                'price' => $item['price'],
                'unit' => $item['unit'],
                'stock' => $item['stock'],
                'description' => $item['description'],
                'image' => $item['image'], // Kita simpan URL-nya
                'is_active' => true,
            ]);
        }
    }
}