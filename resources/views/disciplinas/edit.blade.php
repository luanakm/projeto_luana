<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Disciplina</title>
    <style>
        body {
            background-color: #ffe6f2; /* Rosa claro */
            color: #800040; /* Vinho escuro */
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 600px;
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
        label {
            color: #800040; /* Vinho escuro */
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: 2px solid #cc0077; /* Rosa médio */
            border-radius: 5px;
            box-sizing: border-box;
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
            margin-top: 10px;
        }
        .btn-success {
            background-color: #ff3399; /* Rosa vibrante */
        }
        .btn-secondary {
            background-color: #800040; /* Vinho escuro */
        }
        .btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Editar disciplina</h1>
        <form action="{{ route('disciplinas.update', $disciplina->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" value="{{ old('nome', $disciplina->nome) }}" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('disciplinas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
