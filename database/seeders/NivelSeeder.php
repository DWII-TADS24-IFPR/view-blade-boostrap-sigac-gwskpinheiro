<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nivel;

class NivelSeeder extends Seeder
{
    public function run()
    {
        Nivel::create([
            'nome' => 'Iniciante',
            'descricao' => 'Para alunos sem experiência prévia.',
        ]);

        Nivel::create([
            'nome' => 'Avançado',
            'descricao' => 'Para alunos com conhecimentos sólidos.',
        ]);
    }
}