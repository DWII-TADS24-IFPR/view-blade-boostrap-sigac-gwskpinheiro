<div>
    <h1>Emitir Declaração</h1>
    <form action="{{ route('declaracoes.store') }}" method="POST">
        @csrf
        <div>
            <label for="aluno_id">Aluno:</label>
            <select name="aluno_id" required>
                @foreach($alunos as $aluno)
                    <option value="{{ $aluno->id }}">{{ $aluno->nome }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="data_emissao">Data de Emissão:</label>
            <input type="date" name="data_emissao" required>
        </div>
        <div>
            <label for="codigo">Código:</label>
            <input type="text" name="codigo" placeholder="ex: DEC-2023-001" required>
        </div>
        <button type="submit">Emitir</button>
    </form>
</div>