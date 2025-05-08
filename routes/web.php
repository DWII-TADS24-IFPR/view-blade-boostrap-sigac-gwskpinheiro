<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComprovanteController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DeclaracaoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\TurmaController;

// Home Route (optional)
Route::get('/', function () {
    return view('welcome');
});

// Aluno Routes
Route::resource('alunos', AlunoController::class);

// Categoria Routes
Route::resource('categorias', CategoriaController::class);

// Comprovante Routes
Route::resource('comprovantes', ComprovanteController::class);

// Curso Routes
Route::resource('cursos', CursoController::class);

// Declaração Routes
Route::resource('declaracoes', DeclaracaoController::class);

// Documento Routes
Route::resource('documentos', DocumentoController::class);

// Nível Routes
Route::resource('niveis', NivelController::class);

// Turma Routes
Route::resource('turmas', TurmaController::class);