<div>
    <h1>Criar Categoria</h1>
    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required>
        </div>
        <div>
            <label for="descricao">Descrição:</label>
            <textarea name="descricao"></textarea>
        </div>
        <button type="submit">Salvar</button>
    </form>
</div>