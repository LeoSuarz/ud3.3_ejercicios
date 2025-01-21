<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->foreignId('alumno_id')->constrained('alumnos')->onDelete('cascade'); // Clave foránea
            $table->string('titulo'); // Campo adicional
            $table->text('contenido'); // Campo adicional
            $table->timestamps(); // Campos de created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
