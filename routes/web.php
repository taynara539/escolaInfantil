<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('welcome');
});

Route::get('/aluno', function () {
    return view('aluno.inicioAluno');
});

Route::get('/cadastrarAluno', function () {
    return view('aluno.cadastroAluno');
});

Route::get('/alunos', function () {
    return view('aluno.listaAluno');
});





/*Route::get('/', function () {
    return view('cadastroAluno');
});*/


//Route::view('alunos', 'cadastroAluno');
