<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use App\Http\Requests\StoreNivelRequest;
use App\Http\Requests\UpdateNivelRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class NivelController extends Controller
{
    public function index(): View
    {
        return view('niveis.index', ['niveis' => Nivel::all()]);
    }

    public function create(): View
    {
        return view('niveis.create');
    }

    public function store(StoreNivelRequest $request): RedirectResponse
    {
        Nivel::create($request->validated());
        return redirect()->route('niveis.index')->with('success', 'Nivel criado com sucesso.');
    }

    public function show(Nivel $niveis): View
    {
        return view('niveis.show', compact('niveis'));
    }

    public function edit(Nivel $niveis): View
    {
        return view('niveis.edit', compact('niveis'));
    }

    public function update(UpdateNivelRequest $request, Nivel $niveis): RedirectResponse
    {
        $niveis->update($request->validated());
        return redirect()->route('niveis.index')->with('success', 'Nivel atualizado com sucesso.');
    }

    public function destroy(Nivel $niveis): RedirectResponse
    {
        $niveis->delete();
        return redirect()->route('niveis.index')->with('success', 'Nivel excluído com sucesso.');
    }
}