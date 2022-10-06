<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement([
                'Frutas','Verduras','Legumbres','Cereales','Tubérculos','Frutos secos','Carne','Pescados','productos lácteos',
                'Aceites','Utencilios','Productos de limpieza']),
            'description' => $this->faker->text($maxNbChars = 100),
            'image' => $this->faker->imageUrl($width = 640, $height = 480)
        ];
    }
}
