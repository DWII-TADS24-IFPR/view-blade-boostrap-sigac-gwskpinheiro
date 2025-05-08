<div>
    <h1>Níveis</h1>
    @foreach ($niveis as $nivel)
        <div>
            <h2>{{ $nivel->nome }}</h2>
            <p>{{ $nivel->descricao ?? 'Sem descrição' }}</p>
        </div>
    @endforeach
</div>