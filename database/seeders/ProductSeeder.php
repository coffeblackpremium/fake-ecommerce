<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Services\FakeStore\FakeStoreService;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $service = (new FakeStoreService())->product()->get();

        $service->map(function ($product) {
            Product::updateOrCreate([
                'name' => $product->title,
                'description' => $product->description,
                'category' => $product->category,
                'image' => $product->image,
                'quantity' => $product->rating['count'],
                'price' => $product->price,
                'created_at' => now(),
            ]);
        });
    }
}
