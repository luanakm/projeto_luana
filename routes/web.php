<?php

use App\Http\Controllers\DisciplinasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/novoAluno', function() {
        return view('alunos.create');
})->name("novoAluno");

Route::get('/novaDisciplina', function() {
        return view('disciplinas.create');
})->name("novaDisciplina");

Route::resource('disciplinas', DisciplinasController::class);
Route::resource('alunos', AlunoController::class);



require __DIR__.'/auth.php';
