<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alunos.create');
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
        ]);
        $aluno->save();

        return redirect()->route('alunos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.show', compact('aluno'));
    }

    public function edit(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.edit', compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->nome = $request->input('nome');
        $aluno->data_de_nascimento = $request->input('data_de_nascimento');
        $aluno->curso = $request->input('curso');

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
