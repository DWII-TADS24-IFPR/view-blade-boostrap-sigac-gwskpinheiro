<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nivel;

class NivelController extends Controller
{
    public function index()
    {
        $niveis = Nivel::all();
        return view('niveis.index', compact('niveis'));
    }

    public function create()
    {
        return view('niveis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|unique:niveis',
            'descricao' => 'nullable',
        ]);

        Nivel::create($request->all());

        return redirect()->route('niveis.index')->with('success', 'Nível cadastrado com sucesso!');
    }

    public function show($id)
    {
        $nivel = Nivel::findOrFail($id);
        return view('niveis.show', compact('nivel'));
    }

    public function edit($id)
    {
        $nivel = Nivel::findOrFail($id);
        return view('niveis.edit', compact('nivel'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|unique:niveis,nome,' . $id,
            'descricao' => 'nullable',
        ]);

        $nivel = Nivel::findOrFail($id);
        $nivel->update($request->all());

        return redirect()->route('niveis.index')->with('success', 'Nível atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $nivel = Nivel::findOrFail($id);
        $nivel->delete();

        return redirect()->route('niveis.index')->with('success', 'Nível removido com sucesso!');
    }
}