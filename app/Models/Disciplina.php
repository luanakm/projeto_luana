<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $table = "disciplinas";
    protected $fillable = ['nome'];

    public function alunos()
    {
        return $this->hasMany(Aluno::class, 'disciplina_id');
    }
}

