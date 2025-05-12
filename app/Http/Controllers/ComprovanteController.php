<?php

namespace App\Http\Controllers;

use App\Models\Comprovante;
use App\Http\Requests\StoreComprovanteRequest;
use App\Http\Requests\UpdateComprovanteRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ComprovanteController extends Controller
{
    public function index(): View
    {
        return view('comprovantes.index', ['comprovantes' => Comprovante::all()]);
    }

    public function create(): View
    {
        return view('comprovantes.create');
    }

    public function store(StoreComprovanteRequest $request): RedirectResponse
    {
        Comprovante::create($request->validated());
        return redirect()->route('comprovantes.index')->with('success', 'Comprovante criado com sucesso.');
    }

    public function show(Comprovante $comprovantes): View
    {
        return view('comprovantes.show', compact('comprovantes'));
    }

    public function edit(Comprovante $comprovantes): View
    {
        return view('comprovantes.edit', compact('comprovantes'));
    }

    public function update(UpdateComprovanteRequest $request, Comprovante $comprovantes): RedirectResponse
    {
        $comprovantes->update($request->validated());
        return redirect()->route('comprovantes.index')->with('success', 'Comprovante atualizado com sucesso.');
    }

    public function destroy(Comprovante $comprovantes): RedirectResponse
    {
        $comprovantes->delete();
        return redirect()->route('comprovantes.index')->with('success', 'Comprovante excluído com sucesso.');
    }
}