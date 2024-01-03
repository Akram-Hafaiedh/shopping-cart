<?php

namespace Database\Seeders;

use App\Models\ShoppingCart;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShoppingCartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productIds = Product::pluck('id')->toArray();
        foreach (range(1, 10) as $index) {
            ShoppingCart::create([
                'product_id' => $productIds[array_rand($productIds)],
                'quantity' => rand(1, 5),
            ]);
        }
    }
}
