<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         $sales = [];

        for ($i = 1; $i <= 10; $i++) {
            $sales[] = [
                'Name_Sale' => "Sale Campaign $i",
                'Moneny' => rand(1000, 10000), // random tiền giảm
                'Code_Voucher' => "SALE" . str_pad($i, 3, '0', STR_PAD_LEFT), // SALE001, SALE002,...
                'Description' => "Auto-generated sale description #$i",
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('sales')->insert($sales);
    }
}
