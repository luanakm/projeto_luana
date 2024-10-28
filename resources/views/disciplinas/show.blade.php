<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Disciplina') }}
    </h2>
</x-slot>

<section class="details">
    <div class="content">
        <div class="meta">
            <span class="label">ID:</span>
            <span class="info">{{ $disciplina->id }}</span>
        </div>
        <div class="meta">
            <span class="label">Nome disciplina:</span>
            <span class="info">{{ $disciplina->nome }}</span>
        </div>
    </div>
    <a href="{{ route('disciplinas.index') }}" class="btn-return">Voltar</a>
</section>
