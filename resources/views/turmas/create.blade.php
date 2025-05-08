<div>
    <h1>Criar Turma</h1>
    <form action="{{ route('turmas.store') }}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome da Turma:</label>
            <input type="text" name="nome" required>
        </div>
        <div>
            <label for="curso_id">Curso:</label>
            <select name="curso_id" required>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="data_inicio">Data de Início:</label>
            <input type="date" name="data_inicio" required>
        </div>
        <button type="submit">Criar</button>
    </form>
</div>