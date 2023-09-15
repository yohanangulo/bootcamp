<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// importa el modulo de empleado
use App\Models\Empleado;
use App\Models\product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Empleado::factory(15)->create();
        product::factory(15)->create();
    }
}
