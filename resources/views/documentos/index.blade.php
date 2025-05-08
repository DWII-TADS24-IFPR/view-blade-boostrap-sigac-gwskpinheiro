<div>
    <h1>Documentos</h1>
    @foreach ($documentos as $documento)
        <div>
            <h2>{{ $documento->tipo }}: {{ $documento->numero }}</h2>
            <p>Aluno: {{ $documento->aluno->nome }}</p>
        </div>
    @endforeach
</div>