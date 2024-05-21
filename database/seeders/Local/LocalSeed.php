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
        $this->call(LocalCompanySeed::class);
        $this->call(LocalProductSeed::class);
        $this->call(LocalUserSeed::class);
        $this->call(LocalEmployeeSeed::class);
        $this->call(LocalClientSeed::class);
        $this->call(LocalSaleSeed::class);
    }
}
