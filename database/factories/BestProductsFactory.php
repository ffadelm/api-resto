<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BestProducts>
 */
class BestProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode' => $this->faker->randomElement(['BP001', 'BP002', 'BP003']),
            'nama' => $this->faker->randomElement(['Bakso', 'Mie Ayam', 'Mie Goreng']),
            'harga' => $this->faker->randomElement([10000, 15000, 20000]),
            'is_ready' => $this->faker->boolean,
            'gambar' => $this->faker->imageUrl('food'),
        ];
    }
}
