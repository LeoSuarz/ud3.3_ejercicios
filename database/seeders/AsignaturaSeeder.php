<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asignaturas')->insert([
            ['nombre' => 'Matemáticas', 'descripcion' => 'Asignatura de matemáticas básicas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Historia', 'descripcion' => 'Asignatura de historia universal', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Ciencias', 'descripcion' => 'Asignatura de ciencias naturales', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
