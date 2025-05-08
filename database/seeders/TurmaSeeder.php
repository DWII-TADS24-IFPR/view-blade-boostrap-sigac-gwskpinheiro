<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Turma;

class TurmaSeeder extends Seeder
{
    public function run()
    {
        Turma::create([
            'nome' => 'Turma A',
            'curso_id' => 1, // Desenvolvimento Web
            'data_inicio' => '2025-03-01',
        ]);

        Turma::create([
            'nome' => 'Turma B',
            'curso_id' => 2, // Data Science
            'data_inicio' => '2025-04-01',
        ]);
    }
}