<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Modelo Ciclos Formativos
//Representa la tabla ciclo_formativos en la base de datos
class CicloFormativo extends Model
{
    use HasFactory;

    //Estos campos pueden rellenarse masivamente desde formularios
    protected $fillable = [
        'nombre',
        'familia_profesional',
        'grado',
        'modalidad',
        'decreto_referencia',
        'activo',
    ];
}
