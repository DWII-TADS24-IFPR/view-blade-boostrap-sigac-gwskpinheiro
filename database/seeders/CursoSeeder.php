<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    public function run()
    {
        Curso::create([
            'nome' => 'Desenvolvimento Web',
            'duracao' => 6, // Em meses
            'nivel_id' => 1, // Relacionado ao Nível "Iniciante"
        ]);

        Curso::create([
            'nome' => 'Data Science',
            'duracao' => 12,
            'nivel_id' => 2, // Relacionado ao Nível "Avançado"
        ]);
    }
}