<?php

namespace Database\Seeders\Local;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class LocalProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'company_id' => rand(1, 50), 
                'name' => $faker->unique()->word,
                'price' => $faker->randomFloat(2, 1, 100), 
            ]);
        }
    }
}
