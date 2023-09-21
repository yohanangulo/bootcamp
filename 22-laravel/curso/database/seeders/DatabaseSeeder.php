<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// importa el modulo de empleado
use App\Models\Empleado;
use App\Models\product;
use App\Models\Articulo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @hace la llamada a los seeders
     */
    public function run(): void
    {
        Empleado::factory(15)->create();
        product::factory(15)->create();
        Articulo::factory(15)->create();

    }
}
