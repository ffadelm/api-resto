<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Products;
use App\Models\Keranjangs;
use App\Models\BestProducts;
use App\Models\Pesanans;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        BestProducts::factory(3)->create();
        Products::factory(10)->create();
        Keranjangs::factory(5)->create();
        Pesanans::factory(5)->create();
    }
}
