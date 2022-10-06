<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'name' => $this->faker->text($maxNbChars = 30),
            'category_id' =>  $this->faker->randomElement(['1','2','3','4','5','6','7','8','9','10','11','12']),
            'description' => $this->faker->text($maxNbChars = 100),
            'image' => $this->faker->imageUrl($width = 640, $height = 480)      
        ];
    }
}
