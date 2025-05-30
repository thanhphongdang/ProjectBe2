<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WareHouse>
 */
class WareHouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name_Car' => $this->faker->words(2, true),
            'Car_Company' => $this->faker->company(),
            'Price' => $this->faker->numberBetween(1000000, 99999999), // tùy chỉnh phù hợp kiểu decimal
            'information' => $this->faker->paragraph(),
            'Image' => 'bmw.jpg', // hoặc $this->faker->image('public/img', 640, 480, 'transport', false),
            'Countries' => $this->faker->country(),
            'Quantity' => $this->faker->numberBetween(1, 100),
        ];
    }
}
