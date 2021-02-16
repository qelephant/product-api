<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()->count(100)->create()->each(function ($product) {
            $product->reviews()->createMany(Review::factory()->count(5)->make()->toArray());
        });
    }
}
