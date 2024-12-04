<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <style>
        body {
            background-color: #ffe6f2; /* Rosa claro */
            color: #800040; /* Vinho escuro */
            font-family: 'Arial', sans-serif;
        }
        .details {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff0f5; /* Rosa muito claro */
            border: 1px solid #ffb3d9; /* Rosa suave */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .details h2 {
            color: #cc0077; /* Rosa médio */
            text-align: center;
            margin-bottom: 20px;
        }
        .meta {
            margin-bottom: 15px;
        }
        .label {
            display: inline-block;
            width: 150px;
            font-weight: bold;
            color: #800040; /* Vinho escuro */
        }
        .info {
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
            <div class="meta">
                <span class="label">Disciplina:</span>
                <span class="info">{{ $aluno->disciplina ? $aluno->disciplina->nome : 'Não atribuída' }}</span>
            </div>
        </div>
        <a href="{{ route('alunos.index') }}" class="btn-return">Voltar</a>
    </section>
</body>
</html>
