<div>
    <h1>Lista de Turmas</h1>
    @foreach ($turmas as $turma)
        <div>
            <h2>{{ $turma->nome }}</h2>
            <p>Curso: {{ $turma->curso->nome }}</p>
            <p>Data Início: {{ $turma->data_inicio }}</p>
        </div>
    @endforeach
</div>