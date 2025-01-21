<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion'];

    /**
     * Relación N:N con Alumno mediante la tabla intermedia 'notas'.
     */
    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'notas')
                    ->withPivot('nota') // Incluye el campo extra de la tabla intermedia
                    ->withTimestamps(); // Incluye created_at y updated_at
    }
}
