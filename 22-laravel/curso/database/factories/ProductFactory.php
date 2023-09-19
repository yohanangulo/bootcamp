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
        $products = [
            'Coca Cola',
            'Pepsi',
            'Fanta',
            'Sprite',
            '7up',
            'Coca Cola Zero',
            'Pepsi Light',
            'Fanta Zero',
            'Sprite Zero',
            '7up Zero',
            'Coca Cola Light',
            'Pepsi Max',
            'Fanta Light',
            'Sprite Light',
            '7up Light',
        ];

        return [
            'nombre' => $products[rand(0, count($products) - 1)],
            'precio' => $this->faker->randomFloat(2, 0, 99999.99),
            'stock' => $this->faker->numberBetween(0, 100),
            'descripcion' => $this->faker->text(30),
        ];
    }
}
