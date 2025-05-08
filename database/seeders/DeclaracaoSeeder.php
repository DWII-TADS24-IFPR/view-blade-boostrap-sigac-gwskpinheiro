<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Declaracao;

class DeclaracaoSeeder extends Seeder
{
    public function run()
    {
        Declaracao::create([
            'aluno_id' => 1, // João Silva
            'data_emissao' => '2025-02-20',
            'codigo' => 'DEC-2025-001',
        ]);
    }
}