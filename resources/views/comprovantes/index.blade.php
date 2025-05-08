<div>
    <h1>Comprovantes</h1>
    @foreach ($comprovantes as $comprovante)
        <div>
            <h2>Aluno: {{ $comprovante->aluno->nome }}</h2>
            <p>Data: {{ $comprovante->data_envio }}</p>
            <p>Arquivo: {{ $comprovante->arquivo }}</p>
        </div>
    @endforeach
</div>