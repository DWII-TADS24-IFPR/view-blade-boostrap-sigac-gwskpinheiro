<div>
    <h1>Criar Nível</h1>
    <form action="{{ route('niveis.store') }}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" placeholder="ex: Iniciante" required>
        </div>
        <div>
            <label for="descricao">Descrição:</label>
            <textarea name="descricao"></textarea>
        </div>
        <button type="submit">Salvar</button>
    </form>
</div>