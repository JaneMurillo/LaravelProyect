<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_materia', 'departamento_id'];

    // Relacion
    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class)->withPivot('calificacion');
    }
}
