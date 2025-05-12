<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Http\Requests\StoreDocumentoRequest;
use App\Http\Requests\UpdateDocumentoRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DocumentoController extends Controller
{
    public function index(): View
    {
        return view('documentos.index', ['documentos' => Documento::all()]);
    }

    public function create(): View
    {
        return view('documentos.create');
    }

    public function store(StoreDocumentoRequest $request): RedirectResponse
    {
        Documento::create($request->validated());
        return redirect()->route('documentos.index')->with('success', 'Documento criado com sucesso.');
    }

    public function show(Documento $documentos): View
    {
        return view('documentos.show', compact('documentos'));
    }

    public function edit(Documento $documentos): View
    {
        return view('documentos.edit', compact('documentos'));
    }

    public function update(UpdateDocumentoRequest $request, Documento $documentos): RedirectResponse
    {
        $documentos->update($request->validated());
        return redirect()->route('documentos.index')->with('success', 'Documento atualizado com sucesso.');
    }

    public function destroy(Documento $documentos): RedirectResponse
    {
        $documentos->delete();
        return redirect()->route('documentos.index')->with('success', 'Documento excluído com sucesso.');
    }
}