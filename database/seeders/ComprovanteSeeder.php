<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comprovante;

class ComprovanteSeeder extends Seeder
{
    public function run()
    {
        Comprovante::create([
            'aluno_id' => 1, // Relacionado ao João Silva
            'data_envio' => '2025-01-10',
            'arquivo' => 'comprovantes/joao-pagamento.pdf',
        ]);
    }
}