<?php

namespace App\Http\Controllers;

use App\Models\Declaracao;
use App\Http\Requests\StoreDeclaracaoRequest;
use App\Http\Requests\UpdateDeclaracaoRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DeclaracaoController extends Controller
{
    public function index(): View
    {
        return view('declaracaos.index', ['declaracaos' => Declaracao::all()]);
    }

    public function create(): View
    {
        return view('declaracaos.create');
    }

    public function store(StoreDeclaracaoRequest $request): RedirectResponse
    {
        Declaracao::create($request->validated());
        return redirect()->route('declaracaos.index')->with('success', 'Declaracao criado com sucesso.');
    }

    public function show(Declaracao $declaracaos): View
    {
        return view('declaracaos.show', compact('declaracaos'));
    }

    public function edit(Declaracao $declaracaos): View
    {
        return view('declaracaos.edit', compact('declaracaos'));
    }

    public function update(UpdateDeclaracaoRequest $request, Declaracao $declaracaos): RedirectResponse
    {
        $declaracaos->update($request->validated());
        return redirect()->route('declaracaos.index')->with('success', 'Declaracao atualizado com sucesso.');
    }

    public function destroy(Declaracao $declaracaos): RedirectResponse
    {
        $declaracaos->delete();
        return redirect()->route('declaracaos.index')->with('success', 'Declaracao excluído com sucesso.');
    }
}