@extends('layouts.app')

@section('title', 'Editar')

@section('content')
    <h1>Editar Registro</h1>
    <form action="{{ route('declaracoes.update', $item) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $item->nome) }}">
            @error('nome')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
@endsection