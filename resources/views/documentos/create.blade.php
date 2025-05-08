<div>
    <h1>Cadastrar Documento</h1>
    <form action="{{ route('documentos.store') }}" method="POST">
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
            <label for="tipo">Tipo:</label>
            <select name="tipo" required>
                <option value="RG">RG</option>
                <option value="CPF">CPF</option>
                <option value="Certidão">Certidão</option>
            </select>
        </div>
        <div>
            <label for="numero">Número:</label>
            <input type="text" name="numero" required>
        </div>
        <button type="submit">Cadastrar</button>
    </form>
</div>