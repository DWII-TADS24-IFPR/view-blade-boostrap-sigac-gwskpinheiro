<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::with('documentos', 'comprovantes')->get();
        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|max:100',
            'matricula' => 'required|unique:alunos|max:20',
            'email' => 'required|email|unique:alunos',
            'data_nascimento' => 'required|date',
            'cpf' => 'required|unique:alunos|max:14'
        ]);

        Aluno::create($validated);

        return redirect()->route('alunos.index')
            ->with('success', 'Aluno cadastrado com sucesso!');
    }

    public function show(Aluno $aluno)
    {
        return view('alunos.show', compact('aluno'));
    }

    public function edit(Aluno $aluno)
    {
        return view('alunos.edit', compact('aluno'));
    }

    public function update(Request $request, Aluno $aluno)
    {
        $validated = $request->validate([
            'nome' => 'required|max:100',
            'matricula' => 'required|max:20|unique:alunos,matricula,'.$aluno->id,
            'email' => 'required|email|unique:alunos,email,'.$aluno->id,
            'data_nascimento' => 'required|date',
            'cpf' => 'required|max:14|unique:alunos,cpf,'.$aluno->id
        ]);

        $aluno->update($validated);

        return redirect()->route('alunos.index')
            ->with('success', 'Aluno atualizado com sucesso!');
    }

    public function destroy(Aluno $aluno)
    {
        $aluno->delete();
        return redirect()->route('alunos.index')
            ->with('success', 'Aluno removido com sucesso!');
    }
}