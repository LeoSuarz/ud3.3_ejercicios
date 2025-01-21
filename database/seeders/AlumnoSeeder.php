<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
            ['nombre' => 'Juan Pérez', 'email' => 'juan.perez@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'María López', 'email' => 'maria.lopez@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Luis García', 'email' => 'luis.garcia@example.com', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

