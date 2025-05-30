<?php

namespace Database\Factories;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\warehouse;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Product::class;

    public function definition(): array
    {
        $carCompanies = ['Toyota', 'Bugatti', 'Lamborghini', 'Ferrari', 'BMW', 'Mercedes'];
        $countries = ['Việt Nam', 'Germany', 'America', 'England', 'Bazil'];
        $carName =['Toyota', 'Bugatti', 'Lamborghini', 'Ferrari', 'BMW', 'Mercedes'];
        $carImages = [
            '1747151101_Porsche933.jpg',
            '1747146520_Audir8.jpg',
            '1747192100_Bentley flying spur.jpg',
            '1747487526_Roll-Royce.jpg',
            '1748360641_xedep4kkk.jpg',
            '1748419823_bmw.jpg',
        ];

        return [
            'ID_Car' => Warehouse::inRandomOrder()->value('id'),
            'Image' => $this->faker->randomElement($carImages),
            'Name_Car' => $this->faker->randomElement($carName),
            'Car_Company' => $this->faker->randomElement($carCompanies),
            'Price' => $this->faker->numberBetween(1000000, 999999999),
            'Information' => $this->faker->paragraph,
            'Countries' => $this->faker->randomElement($countries),
        ];

    }
}
