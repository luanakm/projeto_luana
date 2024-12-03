<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disciplina</title>
    <style>
        body {
            background-color: #ffe6f2; /* Rosa claro */
            color: #800040; /* Vinho escuro */
            font-family: 'Arial', sans-serif;
        }
        .header {
            text-align: center;
            padding: 20px;
            background-color: #ff66b2; /* Rosa claro */
            border-bottom: 1px solid #ffb3d9; /* Rosa suave */
            color: white;
        }
        .details {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff0f5; /* Rosa muito claro */
            border: 1px solid #ffb3d9; /* Rosa suave */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .details .meta {
            margin-bottom: 15px;
        }
        .details .label {
            display: inline-block;
            width: 150px;
            font-weight: bold;
            color: #800040; /* Vinho escuro */
        }
        .details .info {
            display: inline-block;
            color: #800040; /* Vinho escuro */
        }
        .btn-return {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background-color: #ff3399; /* Rosa vibrante */
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            margin-top: 20px;
            text-align: center;
        }
        .btn-return:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2 class="font-semibold text-xl leading-tight">{{ __('Disciplina') }}</h2>
    </div>
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
</body>
</html>
