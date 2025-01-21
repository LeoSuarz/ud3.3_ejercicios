<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'email'];

    /**
     * Relación N:N con Asignatura mediante la tabla intermedia 'notas'.
     */
    public function asignaturas()
    {
        return $this->belongsToMany(Asignatura::class, 'notas')
                    ->withPivot('nota') // Incluye el campo extra de la tabla intermedia
                    ->withTimestamps(); // Incluye created_at y updated_at
    }

    public function perfil()
{
    return $this->hasOne(Perfil::class);
}

    public function posts()
    {
        return $this->hasMany(Post::class);
    }


}
