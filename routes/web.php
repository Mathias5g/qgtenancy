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
Route::get('/login', ['as' => 'login', 'uses' => 'QgController@index']);
Route::post('/login/auth', ['as' => 'qg.login', 'uses' => 'QgController@index']);
Route::get('/cadastro', ['as' => 'qg.cadastro', 'uses' => 'QgController@cadastro']);
Route::post('/cadastro/create', ['as' => 'qg.cadastro.create', 'uses' => 'QgController@create']);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', ['as' => 'home.home']);

    Route::get('/missoes', ['as' => 'missoes.missoes', 'uses' => 'MissoesController@index']);
    Route::get('/missoes/adicionar', ['as' => 'missoes.adicionar', 'uses' => 'MissoesController@index']);
    Route::post('/missoes/adicionar/create', ['as' => 'missoes.adicionar.create', 'uses' => 'MissoesController@index']);
    Route::get('/missoes/detalhes/{id}', ['as' => 'missoes.adicionar.detalhes', 'uses' => 'MissoesController@index']);
    Route::get('/missoes/detalhes/{id}/editar', ['as' => 'missoes.adicionar.editar', 'uses' => 'MissoesController@index']);
    Route::delete('/missoes/detalhes/{id}/deletar', ['as' => 'missoes.adicionar.deletar', 'uses' => 'MissoesController@index']);
});



/*
Route::get('/artigos', function() {
    return response()->json([
        ['name' => 'Leandro', 'idade' => 26],
        ['name' => 'Gael', 'idade' => 2],
    ]);
});
*/
