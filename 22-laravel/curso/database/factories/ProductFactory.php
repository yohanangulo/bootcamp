<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
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
            'nombre' => $this->faker->words(4, true),
            'precio' => $this->faker->randomFloat(2, 0, 99999.99),
            'stock' => $this->faker->numberBetween(0, 100),
            'descripcion' => $this->faker->text(30),
        ];
    }
}
