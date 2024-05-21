<?php

namespace Database\Seeders\Local;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\Company;
use Faker\Factory as Faker;

class LocalCompanySeed extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            Company::create([
                'name' => $faker->unique()->company,
            ]);
        }
    }
}
