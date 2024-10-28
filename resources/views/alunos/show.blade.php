<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Alunos') }}
    </h2>
</x-slot>

<section class="details">
    <div class="content">
        <div class="meta">
            <span class="label">ID:</span>
            <span class="info">{{ $aluno->id }}</span>
        </div>
        <div class="meta">
            <span class="label">Nome:</span>
            <span class="info">{{ $aluno->nome }}</span>
        </div>
        <div class="meta">
            <span class="label">Data de nascimento:</span>
            <span class="info">{{ $aluno->data_de_nascimento }}</span>
        </div>
        <div class="meta">
            <span class="label">Curso:</span>
            <span class="info">{{ $aluno->curso }}</span>
        </div>
    </div>
    <a href="{{ route('alunos.index') }}" class="btn-return">Voltar</a>
</section>
