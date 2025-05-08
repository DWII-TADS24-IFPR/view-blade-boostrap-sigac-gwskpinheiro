<div>
    <h1>Cadastrar Aluno</h1>
    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required>
        </div>
        <div>
            <label for="matricula">Matrícula:</label>
            <input type="text" name="matricula" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" required>
        </div>
        <div>
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" required>
        </div>
        <button type="submit">Cadastrar</button>
    </form>
</div>