<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Declaracao;
use App\Models\Aluno;

class DeclaracaoController extends Controller
{
    public function index()
    {
        $declaracoes = Declaracao::with('aluno')->get();
        return view('declaracoes.index', compact('declaracoes'));
    }

    public function create()
    {
        $alunos = Aluno::all();
        return view('declaracoes.create', compact('alunos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'data_emissao' => 'required|date',
            'codigo' => 'required|unique:declaracoes',
        ]);

        Declaracao::create($request->all());

        return redirect()->route('declaracoes.index')->with('success', 'Declaração cadastrada com sucesso!');
    }

    public function show($id)
    {
        $declaracao = Declaracao::with('aluno')->findOrFail($id);
        return view('declaracoes.show', compact('declaracao'));
    }

    public function edit($id)
    {
        $declaracao = Declaracao::findOrFail($id);
        $alunos = Aluno::all();
        return view('declaracoes.edit', compact('declaracao', 'alunos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'data_emissao' => 'required|date',
            'codigo' => 'required|unique:declaracoes,codigo,' . $id,
        ]);

        $declaracao = Declaracao::findOrFail($id);
        $declaracao->update($request->all());

        return redirect()->route('declaracoes.index')->with('success', 'Declaração atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $declaracao = Declaracao::findOrFail($id);
        $declaracao->delete();

        return redirect()->route('declaracoes.index')->with('success', 'Declaração removida com sucesso!');
    }
}