<div>
    <h1>Adicionar Comprovante</h1>
    <form action="{{ route('comprovantes.store') }}" method="POST">
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
            <label for="data_envio">Data de Envio:</label>
            <input type="date" name="data_envio" required>
        </div>
        <div>
            <label for="arquivo">Arquivo (URL):</label>
            <input type="text" name="arquivo" placeholder="ex: comprovantes/arquivo.pdf" required>
        </div>
        <button type="submit">Enviar</button>
    </form>
</div>