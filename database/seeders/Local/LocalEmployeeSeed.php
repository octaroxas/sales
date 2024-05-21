<?php

namespace Database\Seeders\Local;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\Company;
use App\Models\User;

class LocalEmployeeSeed extends Seeder
{
    public function run()
    {
        $companyIds = Company::pluck('id')->toArray();
        $userIds = User::pluck('id')->toArray();

        for ($i = 0; $i < 100; $i++) {
            Employee::create([
                'company_id' => $companyIds[array_rand($companyIds)],
                'user_id' => $userIds[array_rand($userIds)],
            ]);
        }
    }
}