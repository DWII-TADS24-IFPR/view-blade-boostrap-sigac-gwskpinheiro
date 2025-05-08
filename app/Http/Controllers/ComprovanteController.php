<?php

namespace App\Http\Controllers;

use App\Models\Comprovante;
use App\Models\Aluno;
use Illuminate\Http\Request;

class ComprovanteController extends Controller
{
    public function index()
    {
        $comprovantes = Comprovante::with('aluno')->get();
        return view('comprovantes.index', compact('comprovantes'));
    }

    public function create()
    {
        $alunos = Aluno::all();
        return view('comprovantes.create', compact('alunos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'data_envio' => 'required|date',
            'arquivo' => 'required|string|max:255'
        ]);

        Comprovante::create($validated);

        return redirect()->route('comprovantes.index')
            ->with('success', 'Comprovante registrado!');
    }
}