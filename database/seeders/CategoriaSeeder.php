<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        Categoria::create([
            'nome' => 'Documentação Acadêmica',
            'descricao' => 'Documentos relacionados a matrículas e históricos.',
        ]);

        Categoria::create([
            'nome' => 'Comprovantes Financeiros',
            'descricao' => 'Comprovantes de pagamento e bolsas.',
        ]);
    }
}