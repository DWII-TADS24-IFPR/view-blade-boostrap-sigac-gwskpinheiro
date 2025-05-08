<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Documento;

class DocumentoSeeder extends Seeder
{
    public function run()
    {
        Documento::create([
            'tipo' => 'RG',
            'numero' => '1234567',
            'aluno_id' => 1, // João Silva
        ]);

        Documento::create([
            'tipo' => 'CPF',
            'numero' => '12345678900',
            'aluno_id' => 2, // Maria Souza
        ]);
    }
}