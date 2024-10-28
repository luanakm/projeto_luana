<body>
    <div class="container">
        <h1>Novo Aluno</h1>
        <form action="{{ route('alunos.store') }}" method="POST">
            <!-- Token CSRF para proteção contra ataques CSRF -->
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>
            <div class="form-group">
                
                <label for="data_de_ascimento">Data de Nascimento:</label>
                <input type="date" name="data_de_nascimento" id="data_nascimento" class="form-control">
            </div>
            <div class="form-group"
                <label for="curso">Curso:</label>
                <input type="text" name="curso" id="curso" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>