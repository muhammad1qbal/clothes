<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laptop>
 */
class LaptopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word(),
            'price' => mt_rand(1, 20),
            'slug' => fake()->slug(),
            'description' => collect(fake()->paragraphs(mt_rand(3, 6)))
                                ->map(fn($p) => "<p>$p</p>")
                                ->implode(''),
            'user_id' => mt_rand(1, 3),
            'brand_id' => mt_rand(1, 3)
        ];
    }
}
