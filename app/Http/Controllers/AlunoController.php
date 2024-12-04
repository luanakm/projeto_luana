<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Disciplina;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::with('disciplina')->get();
        return view('alunos.index', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $disciplinas = Disciplina::all();
        return view('alunos.create', compact('disciplinas'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aluno = new Aluno([
            'nome' => $request->input('nome'),
            'data_de_nascimento' => $request->input('data_de_nascimento'),
            'curso' => $request->input('curso'),
            'disciplina_id' => $request->disciplina_id,
        ]);
        $aluno->save();

        return redirect()->route('alunos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aluno = Aluno::with('disciplina')->findOrFail($id);
        return view('alunos.show', compact('aluno'));
    }

    public function edit(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        $disciplinas = Disciplina::all();
        return view('alunos.edit', compact('aluno', 'disciplinas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->nome = $request->input('nome');
        $aluno->data_de_nascimento = $request->input('data_de_nascimento');
        $aluno->curso = $request->input('curso');
        $aluno->disciplina_id = $request->input('disciplina_id');

        $aluno->save();

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
