<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/curso-listagem', [ CursoController::class, 'index' ])->name('curso.listagem');
Route::get('/curso-cadastro', [ CursoController::class, 'create' ])->name('curso.cadastro');
Route::post('/curso-salvar', [ CursoController::class, 'store' ])->name('curso.salvar');
Route::get('/curso-alterar/{id}', [ CursoController::class, 'edit' ])->name('curso.alterar');
Route::put('/curso-atualizar/{id}', [ CursoController::class, 'update' ])->name('curso.atualizar');

/*Route::get('/apresentacao', function () {
    return view('apresentacao');
});*/

Route::get('/apresentacao-disciplina', function () {
    return view('disciplina');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
