<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articulo>
 */
class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $productos = ['Mouse', 'Teclado', 'Monitor', 'Cornetas', 'Memoria'];
        $metodos_de_pago = ['efectivo', 'transferencia', 'tarjeta', 'Biopago', 'Pagomovil'];

        return [
            'nombre' => $this->faker->randomElement($productos),
            'precio' => $this->faker->randomFloat(2, 10, 1000),
            'imagen' => $this->faker->imageUrl(640, 480, 'animals', true),
            'stock' => $this->faker->numberBetween(0, 100),
            'codigo' => $this->faker->ean8(),
            'metodo_de_pago' => $this->faker->randomElement($metodos_de_pago),
        ];
    }
}
