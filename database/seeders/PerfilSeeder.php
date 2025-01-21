<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilSeeder extends Seeder
{
    public function run()
    {
        DB::table('perfiles')->insert([
            ['alumno_id' => 1, 'biografia' => 'Alumno destacado en matemáticas.', 'created_at' => now(), 'updated_at' => now()],
            ['alumno_id' => 2, 'biografia' => 'Interesado en historia y ciencias.', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
