<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'short_description' => fake()->sentence(),
            'description' => fake()->paragraph(3),
            'price' => fake()->numberBetween(1,125)
        ];

        // return [ # DE MANERA 'MANUAL'
        //     'name' => Str::random(25),
        //     'short_description' => Str::random(45),
        //     'description' => Str::random(150),
        //     'price' => random_int(1,125)
        // ];
    }
}
