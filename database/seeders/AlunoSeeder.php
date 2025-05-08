<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aluno;

class AlunoSeeder extends Seeder
{
    public function run()
    {
        Aluno::create([
            'nome' => 'João Silva',
            'matricula' => '20240001',
            'email' => 'joao@exemplo.com',
            'data_nascimento' => '2000-01-01',
            'cpf' => '12345678900',
        ]);

        Aluno::create([
            'nome' => 'Maria Souza',
            'matricula' => '20240002',
            'email' => 'maria@exemplo.com',
            'data_nascimento' => '1999-05-15',
            'cpf' => '98765432100',
        ]);
    }
}