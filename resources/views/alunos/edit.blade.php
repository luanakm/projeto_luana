<section class="edit-form">
    <div class="container">
        <h1>Editar aluno</h1>
        <form action="{{ route('alunos.update', $aluno->id) }}" method="POST">
            <!-- Token CSRF para proteção contra ataques CSRF -->
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" value="{{old('nome',$aluno->nome)}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" name="data_de_nascimento" id="data_de_nascimento" value="{{old(key: 'data de nascimento:', default: $aluno->data_de_nascimento)}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="curso">Curso:</label>
                <input type="text" name="curso" id="curso" value="{{old(key: 'curso', default:$aluno->curso)}}" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    </section>
