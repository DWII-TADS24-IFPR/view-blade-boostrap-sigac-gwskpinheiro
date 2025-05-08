<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use App\Models\Curso;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    public function index()
    {
        $turmas = Turma::with('curso', 'alunos')->get();
        return view('turmas.index', compact('turmas'));
    }

    public function create()
    {
        $cursos = Curso::all();
        return view('turmas.create', compact('cursos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|max:50',
            'curso_id' => 'required|exists:cursos,id',
            'data_inicio' => 'required|date|after_or_equal:today'
        ]);

        Turma::create($validated);

        return redirect()->route('turmas.index')
            ->with('success', 'Turma criada com sucesso!');
    }
}