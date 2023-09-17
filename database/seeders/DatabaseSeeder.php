<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::factory(30)
            ->sequence(
                [
                    'category_id' => Category::factory()->create()->id,
                ],
                [
                    'category_id' => Category::factory()->create()->id,
                ],
                [
                    'category_id' => Category::factory()->create()->id,
                ],
            )
            ->create();
    }
}
