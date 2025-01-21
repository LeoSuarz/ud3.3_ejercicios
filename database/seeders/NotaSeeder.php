<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->insert([
            ['alumno_id' => 1, 'asignatura_id' => 1, 'nota' => 8.5, 'created_at' => now(), 'updated_at' => now()],
            ['alumno_id' => 1, 'asignatura_id' => 2, 'nota' => 7.0, 'created_at' => now(), 'updated_at' => now()],
            ['alumno_id' => 2, 'asignatura_id' => 3, 'nota' => 9.0, 'created_at' => now(), 'updated_at' => now()],
            ['alumno_id' => 2, 'asignatura_id' => 1, 'nota' => 6.5, 'created_at' => now(), 'updated_at' => now()],
            ['alumno_id' => 3, 'asignatura_id' => 2, 'nota' => 8.0, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    
}
