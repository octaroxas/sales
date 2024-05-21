<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Local\LocalSeed;
use Database\Seeders\Production\ProductionSeed;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if(app()->isProduction()){
            //$this->call(ProductionSeed::class);
            $this->call(LocalSeed::class);
        } else {
            $this->call(LocalSeed::class);
        }
    }
}
