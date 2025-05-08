<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Models\Aluno;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function create()
    {
        $alunos = Aluno::all();
        $tipos = ['RG', 'CPF', 'Certidão', 'Histórico'];
        return view('documentos.create', compact('alunos', 'tipos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'tipo' => 'required|in:RG,CPF,Certidão,Histórico',
            'numero' => 'required|max:50'
        ]);

        Documento::create($validated);

        return redirect()->route('documentos.index')
            ->with('success', 'Documento cadastrado!');
    }
}