<div>
    <h1>Declarações</h1>
    @foreach ($declaracoes as $declaracao)
        <div>
            <h2>Código: {{ $declaracao->codigo }}</h2>
            <p>Aluno: {{ $declaracao->aluno->nome }}</p>
            <p>Data: {{ $declaracao->data_emissao }}</p>
        </div>
    @endforeach
</div>