@extends('layouts.app')

@section('title', 'Detalhes')

@section('content')
    <h1>Detalhes</h1>
    <ul class="list-group">
        <li class="list-group-item"><strong>ID:</strong> {{ $curso->id }}</li>
        <li class="list-group-item"><strong>Nome:</strong> {{ $curso->nome ?? '-' }}</li>
    </ul>

    <a href="{{ route('cursos.index') }}" class="btn btn-secondary mt-3">Voltar</a>
@endsection