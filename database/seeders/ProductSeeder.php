<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'susu etawalin',
                'image' => '/images/product-2.png',
                'price' => 120000,
                'discount' => 20,
            ],
            [
                'name' => 'generos',
                'image' => '/images/product.png',
                'price' => 450000,
                'discount' => 20,
            ],
            [
                'name' => 'generos',
                'image' => '/images/product.png',
                'price' => 450000,
                'discount' => 20,
            ],
            [
                'name' => 'susu etawalin',
                'image' => '/images/product-2.png',
                'price' => 120000,
                'discount' => 20,
            ],
            [
                'name' => 'generos',
                'image' => '/images/product.png',
                'price' => 450000,
                'discount' => 20,
            ],
        ]);
    }
}
