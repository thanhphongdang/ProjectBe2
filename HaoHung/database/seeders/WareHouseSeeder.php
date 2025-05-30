<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class WareHouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        $carCompanies = ['Toyota', 'Honda', 'Ford', 'BMW', 'Audi', 'Hyundai', 'Chevrolet'];
        $countries = ['Japan', 'USA', 'Germany', 'Korea', 'France'];
        $carImages = [
            '1747151101_Porsche933.jpg',
            '1747146520_Audir8.jpg',
            '1747192100_Bentley flying spur.jpg',
            '1747487526_Roll-Royce.jpg',
            '1748360641_xedep4kkk.jpg',
            '1748419823_bmw.jpg',
        ];

        for ($i = 0; $i < 20; $i++) {
            DB::table('warehouses')->insert([
                'Name_Car' => $faker->word() . ' ' . strtoupper($faker->randomLetter()) . rand(100, 999),
                'Car_Company' => $faker->randomElement($carCompanies),
                'Price' => $faker->randomFloat(2, 10000, 100000),
                'information' => $faker->paragraph(3),
                'Image' => $faker->randomElement($carImages),
                'Countries' => $faker->randomElement($countries),
                'Quantity' => $faker->numberBetween(1, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
