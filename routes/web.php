<?php

use Illuminate\Support\Facades\Route;

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

/* Implementação Simples de Rotas
Route::get('/', function () {
    return 'Olá, seja bem vindo ao curso';
});

Route::get('/sobre-nos', function () {
    return 'Sobre Nós';
});

Route::get('/contato', function () {
    return 'Contato';
});

*/

/*

Rota com Regex para conferir se os parâmetros atendem aos requisitos da rota!

Route::get(    '/contato/{nome}/{categoria_id}',
    function (
        string $nome,
        int $categoria_id = 1 // 1 - 'Informação',
    ) {
    echo "Estamos aqui: $nome - $categoria_id";
    }
)->where('categoria_id','[0-9]+' )->where('nome','[A-Za-z]+');

==============================================================

Principais Verbos http
    get
    post
    put
    patch
    delete
    options
*/

/* Implementação dos Controllers */

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal']);

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class,'sobrenos']);

Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato']);



