<?php

namespace Database\Seeders\Local;

use Illuminate\Database\Seeder;
use App\Models\Sale;
use App\Models\Product;
use App\Models\Client;
use App\Models\Employee;
use Faker\Factory as Faker;

class LocalSaleSeed extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $productIds = Product::pluck('id')->toArray();
        $clientIds = Client::pluck('id')->toArray();
        $employeeIds = Employee::pluck('id')->toArray();

        for ($i = 0; $i < 40; $i++) {
            $quantity = $faker->numberBetween(1, 10);
            $productId = $productIds[array_rand($productIds)];
            $totalPrice = $quantity * Product::find($productId)->price;

            Sale::create([
                'product_id' => $productId,
                'client_id' => $clientIds[array_rand($clientIds)],
                'quantity' => $quantity,
                'total_price' => $totalPrice,
                'employee_id' => $employeeIds[array_rand($employeeIds)],
            ]);
        }
    }
}