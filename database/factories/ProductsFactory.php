<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode' => $this->faker->unique()->randomElement(['BP001', 'BP002', 'BP003', 'BP004', 'BP005', 'BP006', 'BP007', 'BP008', 'BP009', 'BP010']),
            'nama' => $this->faker->unique()->randomElement(['Bakso', 'Mie Ayam', 'Mie Goreng', 'Nasi Goreng', 'Nasi Ayam', 'Nasi Bakar', 'Nasi Uduk', 'Nasi Kuning', 'Nasi Kebuli', 'Nasi Kucing']),
            'harga' => $this->faker->randomElement([10000, 15000, 20000, 25000, 30000, 35000, 40000, 45000, 50000]),
            'is_ready' => $this->faker->boolean,
            'gambar' => $this->faker->imageUrl('food'),
        ];
    }
}
