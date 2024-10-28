<section class="edit-form">
    <div class="container">
        <h1>Editar disciplina</h1>
        <form action="{{ route('disciplinas.update', $disciplina->id) }}" method="POST">
            <!-- Token CSRF para proteção contra ataques CSRF -->
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" value="{{old('nome',$disciplina->nome)}}" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('disciplinas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    </section>
