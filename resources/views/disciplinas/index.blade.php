<x-app-layout>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>
        <a class="nav-link" href="{{route("novaDisciplina")}}">{{__("novaDisciplina")}}</a>
    </thead>
    <tbody>
        @foreach ($disciplinas as $disciplina)
            <tr>
                <td class="colunas">{{ $disciplina->id }}</td>
                <td id="nome">{{ $disciplina->nome }}</td>
                <td>
                    <a href="{{ route('disciplinas.show', $disciplina->id) }}" class="btn btn-info">Detalhes</a>
                    <a href="{{ route('disciplinas.edit', $disciplina->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('disciplinas.destroy', $disciplina->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</x-app-layout>