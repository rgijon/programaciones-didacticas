<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CicloFormativo;

//Con seeder insertamos datos de prueba
class CicloFormativoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        CicloFormativo::firstOrCreate([   //Para evitar duplicados utilizamos firstOrCreate (si se utilizara varias veces el seeder, se duplicaría)
        'nombre' => 'DAM',
        'familia_profesional' => 'Informática',
        'grado' => 'Superior',
        'modalidad' => 'Presencial',
        'decreto_referencia' => 'BOE123',
        'activo' => true,
    ]);

    CicloFormativo::firstOrCreate([
        'nombre' => 'DAW',
        'familia_profesional' => 'Informática',
        'grado' => 'Superior',
        'modalidad' => 'Presencial',
        'decreto_referencia' => 'BOE456',
        'activo' => true,
    ]);

    CicloFormativo::firstOrCreate([
        'nombre' => 'ASIR',
        'familia_profesional' => 'Informática',
        'grado' => 'Superior',
        'modalidad' => 'Semipresencial',
        'decreto_referencia' => 'BOE789',
        'activo' => true,
    ]);
    }
}
