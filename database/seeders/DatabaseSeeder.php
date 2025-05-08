<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            NivelSeeder::class,
            CursoSeeder::class,
            AlunoSeeder::class,
            TurmaSeeder::class,
            CategoriaSeeder::class,
            DocumentoSeeder::class,
            ComprovanteSeeder::class,
            DeclaracaoSeeder::class,
        ]);
    }
}