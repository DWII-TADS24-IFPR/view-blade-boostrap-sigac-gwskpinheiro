<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Nivel;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::with('nivel', 'turmas')->get();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        $niveis = Nivel::all();
        return view('cursos.create', compact('niveis'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|max:100',
            'duracao' => 'required|integer|min:1',
            'nivel_id' => 'required|exists:niveis,id'
        ]);

        Curso::create($validated);

        return redirect()->route('cursos.index')
            ->with('success', 'Curso criado com sucesso!');
    }

    // ... (show, edit, update, destroy mantêm a mesma estrutura)
}