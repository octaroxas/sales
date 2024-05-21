<?php

namespace Database\Seeders\Local;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\Client;
use Faker\Factory as Faker;
use Carbon\Carbon;

class LocalClientSeed extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 40; $i++) {
            Client::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}