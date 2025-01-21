<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AlumnoSeeder::class,
            AsignaturaSeeder::class,
            NotaSeeder::class,
            PerfilSeeder::class,
            PostSeeder::class,
        ]);
    }
}
