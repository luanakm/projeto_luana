<x-app-layout>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Curso</th>
            <th>Ações</th>
        </tr>
            <a class="nav-link" href="{{route("novoAluno")}}">{{__("novoAluno")}}</a>
    </thead>
    <tbody>
        @foreach ($alunos as $aluno)
            <tr>
                <td class="colunas">{{ $aluno->id }}</td>
                <td id="nome">{{ $aluno->nome }}</td>
                <td>{{ $aluno->data_de_nascimento }}</td>
                <td>{{ $aluno->curso }}</td>
                
                <td>
                    <a href="{{ route('alunos.show', $aluno->id) }}" class="btn btn-info">Detalhes</a>
                    <a href="{{ route('alunos.edit', $aluno->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display: inline;">
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