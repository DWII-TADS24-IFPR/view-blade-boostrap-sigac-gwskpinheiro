<div>
    <h1>Cadastrar Curso</h1>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome do Curso:</label>
            <input type="text" name="nome" required>
        </div>
        <div>
            <label for="duracao">Duração (meses):</label>
            <input type="number" name="duracao" required>
        </div>
        <div>
            <label for="nivel_id">Nível:</label>
            <select name="nivel_id" required>
                @foreach($niveis as $nivel)
                    <option value="{{ $nivel->id }}">{{ $nivel->nome }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Cadastrar</button>
    </form>
</div>
