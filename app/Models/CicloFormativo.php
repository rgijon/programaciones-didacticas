<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CicloFormativo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'familia_profesional',
        'grado',
        'modalidad',
        'decreto_referencia',
        'activo',
    ];
}
