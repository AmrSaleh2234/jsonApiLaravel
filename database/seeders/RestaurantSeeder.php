<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sushiPlace = Restaurant::create(['name' => 'Sushi Place', 'address' => '123 Main Street']);
                $burgerPlace = Restaurant::create(['name' => 'Burger Place', 'address' => '456 Other Street']);

                $sushiPlace->dishes()->createMany([
                        ['name' => 'Volcano Roll', 'rating' => 3],
                        ['name' => 'Salmon Nigiri', 'rating' => 4],
                    ]);

                $burgerPlace->dishes()->createMany([
                        ['name' => 'Barbecue Burger', 'rating' => 5],
                        ['name' => 'Slider', 'rating' => 3],
                    ]);
    }
}
