<?php

namespace App\Http\Controllers;

use App\Models\aluno_disciplina;
use Illuminate\Http\Request;

class Aluno_disciplinaController extends Controller
{
    public function index()
    {
        $aluno_disciplina = aluno_disciplina::all();
        return view('aluno_disciplina.index', compact('aluno_disciplina'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aluno_disciplina.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aluno_disciplina = new Aluno_disciplina([
            'aluno_id' => $request->input('aluno_id'),
            'disciplina_id' => $request->input('disciplina_id'),
        ]);
        $aluno_disciplina->save();

        return redirect()->route('alunos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aluno_disciplina = Aluno_disciplina::findOrFail($id);
        return view('aluno_disciplina.show', compact('aluno_disciplina'));
    }

    public function edit(string $id)
    {
        $aluno_disciplina = Aluno_disciplina::findOrFail($id);
        return view('aluno_disciplina.edit', compact('aluno_disciplina'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Atualizar informações do aluno
        $aluno = Aluno_disciplina::findOrFail($id);
        $aluno->nome = $request->input('nome');
        $aluno->data_de_nascimento = $request->input('data_de_nascimento');
        $aluno->curso = $request->input('curso');
        $aluno->save();
    
        // Atualizar disciplinas do aluno
        $disciplinasIds = $request->input('disciplinas'); // Um array de IDs de disciplinas
        $aluno->disciplinas()->sync($disciplinasIds);
    
        return redirect()->route('alunos.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alunos = Aluno::findOrFail($id);
        $alunos->delete();
        return redirect()->route('alunos.index');
    }
}
