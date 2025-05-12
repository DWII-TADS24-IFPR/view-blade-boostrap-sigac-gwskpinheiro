<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CategoriaController extends Controller
{
    public function index(): View
    {
        return view('categorias.index', ['categorias' => Categoria::all()]);
    }

    public function create(): View
    {
        return view('categorias.create');
    }

    public function store(StoreCategoriaRequest $request): RedirectResponse
    {
        Categoria::create($request->validated());
        return redirect()->route('categorias.index')->with('success', 'Categoria criado com sucesso.');
    }

    public function show(Categoria $categorias): View
    {
        return view('categorias.show', compact('categorias'));
    }

    public function edit(Categoria $categorias): View
    {
        return view('categorias.edit', compact('categorias'));
    }

    public function update(UpdateCategoriaRequest $request, Categoria $categorias): RedirectResponse
    {
        $categorias->update($request->validated());
        return redirect()->route('categorias.index')->with('success', 'Categoria atualizado com sucesso.');
    }

    public function destroy(Categoria $categorias): RedirectResponse
    {
        $categorias->delete();
        return redirect()->route('categorias.index')->with('success', 'Categoria excluído com sucesso.');
    }
}