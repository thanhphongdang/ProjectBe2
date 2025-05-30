<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class OderesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $data = [];

        for ($i = 1; $i <= 20; $i++) {
            $data[] = [
                'Name_Car' => 'Car Model ' . $i,
                'ID_Customer' => rand(1, 5),   // Giả định có sẵn 5 customers
                'ID_Product' => rand(1, 5),    // Giả định có sẵn 5 products
                'ID_Sale' => rand(1, 3),       // Giả định có sẵn 3 sales
                'Report' => 'Auto-generated report #' . $i,
                'Order_date' => Carbon::now()->subDays(rand(0, 30)),
                'Money_Sum' => rand(15000, 50000),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('oderes')->insert($data);
    }
}
