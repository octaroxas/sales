<?php

namespace Database\Seeders\Local;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocalSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(LocalUserSeed::class);
        
    }
}
