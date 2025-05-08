<div>
    <h1>Lista de Cursos</h1>
    @foreach ($cursos as $curso)
        <div>
            <h2>{{ $curso->nome }}</h2>
            <p>Duração: {{ $curso->duracao }} meses</p>
            <p>Nível: {{ $curso->nivel->nome }}</p>
        </div>
    @endforeach
</div>