<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            Customer::create([
                'ID_Customer' => $i,
                'Name' => 'Customer ' . $i,
                'Email' => 'customer' . $i . '@example.com',
                'Phone' => '09000000' . $i,
                'Address' => 'Address ' . $i,
                'Ngay_Mua' => now(),
            ]);
        }
    }
}
