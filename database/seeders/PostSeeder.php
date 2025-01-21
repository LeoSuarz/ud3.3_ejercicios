<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            ['alumno_id' => 1, 'titulo' => 'Mi primer post', 'contenido' => 'Este es el contenido de mi primer post.', 'created_at' => now(), 'updated_at' => now()],
            ['alumno_id' => 1, 'titulo' => 'Aprendiendo Laravel', 'contenido' => 'Compartiendo mi experiencia aprendiendo Laravel.', 'created_at' => now(), 'updated_at' => now()],
            ['alumno_id' => 2, 'titulo' => 'Historia y ciencia', 'contenido' => 'Un enfoque en la historia y las ciencias.', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
