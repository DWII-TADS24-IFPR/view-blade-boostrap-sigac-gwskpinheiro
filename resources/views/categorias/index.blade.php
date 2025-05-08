<div>
    <h1>Categorias</h1>
    @foreach ($categorias as $categoria)
        <div>
            <h2>{{ $categoria->nome }}</h2>
            <p>{{ $categoria->descricao ?? 'Sem descrição' }}</p>
        </div>
    @endforeach
</div>