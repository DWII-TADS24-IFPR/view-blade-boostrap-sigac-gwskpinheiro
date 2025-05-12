<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categorias')->insert([
            ['nome' => 'RG'],
            ['nome' => 'CPF'],
            ['nome' => 'Histórico Escolar'],
        ]);
    }
}