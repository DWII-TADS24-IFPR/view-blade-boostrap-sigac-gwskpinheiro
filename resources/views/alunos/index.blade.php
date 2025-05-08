<div>
    <h1>Lista de Alunos</h1>
    @foreach ($alunos as $aluno)
        <div>
            <h2>{{ $aluno->nome }}</h2>
            <p>Matrícula: {{ $aluno->matricula }}</p>
            <p>Email: {{ $aluno->email }}</p>
            <p>Data Nasc.: {{ $aluno->data_nascimento }}</p>
            <p>CPF: {{ $aluno->cpf }}</p>
        </div>
    @endforeach
</div>
