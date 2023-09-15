<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    // este factory llena de datos falsos la tabla empleados
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        // en caso de querer agg lista personalizada de nombres
        $nombres = [ 'Juan', 'Pedro', 'Maria', 'Jose', 'Luis', 'Carlos', 'Ana', 'Luisa', 'Jorge', 'Joaquin', 'Jesús', 'Jesica'];

        return [
            'nombre' => $nombres[rand(0, count($nombres) - 1)],
            // 'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'telefono' => $this->faker->phoneNumber(),
            'direccion' => $this->faker->address(),
            'fecha_nacimiento' => $this->faker->date(),
            'ciudad' => $this->faker->city(),
        ];
    }
}
