<x-app-layout>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disciplinas</title>
    <style>
        body {
            background-color: #ffe6f2; /* Rosa claro */
            color: #800040; /* Vinho escuro */
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff0f5; /* Rosa muito claro */
            border: 1px solid #ffb3d9; /* Rosa suave */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #cc0077; /* Rosa médio */
            text-align: center;
            margin-bottom: 20px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .table th, .table td {
            border: 1px solid #ffb3d9; /* Rosa suave */
            padding: 10px;
            text-align: left;
        }
        .table th {
            background-color: #ff66b2; /* Rosa claro */
            color: white;
        }
        .table td {
            background-color: #ffe6f2; /* Rosa claro */
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background-color: #ff3399; /* Rosa vibrante */
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        .btn-info {
            background-color: #33ccff; /* Azul claro */
        }
        .btn-warning {
            background-color: #ffcc00; /* Amarelo */
        }
        .btn-danger {
            background-color: #ff3333; /* Vermelho */
        }
        .btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Disciplinas</h1>
        <a class="nav-link" href="{{ route('novaDisciplina') }}">{{ __('Nova Disciplina') }}</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
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
    </div>
</body>
</html>
</x-app-layout>