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
Route::get('/', ['as' => 'index', 'uses' => 'Qg\QgController@index']);
Route::get('/login', ['as' => 'qg.login', 'uses' => 'Qg\QgController@login']);
Route::post('/login/auth', ['as' => 'qg.login.auth', 'uses' => 'Qg\QgController@auth']);
Route::get('/login/sair', ['as' => 'qg.login.sair', 'uses' => 'Qg\QgController@sair']);
Route::get('/cadastro', ['as' => 'qg.cadastro', 'uses' => 'Qg\QgController@cadastro']);
Route::post('/cadastro/create', ['as' => 'qg.cadastro.create', 'uses' => 'Qg\QgController@create']);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', ['as' => 'home.home', 'uses' => 'Home\HomeController@index']);

    Route::get('/missoes', ['as' => 'missoes.missoes', 'uses' => 'Missoes\MissoesController@index']);
    Route::get('/missoes/adicionar', ['as' => 'missoes.adicionar', 'uses' => 'Missoes\MissoesController@index']);
    Route::post('/missoes/adicionar/create', ['as' => 'missoes.adicionar.create', 'uses' => 'Missoes\MissoesController@index']);
    Route::get('/missoes/detalhes/{id}', ['as' => 'missoes.adicionar.detalhes', 'uses' => 'Missoes\MissoesController@index']);
    Route::get('/missoes/detalhes/{id}/editar', ['as' => 'missoes.adicionar.editar', 'uses' => 'Missoes\MissoesController@index']);
    Route::delete('/missoes/detalhes/{id}/deletar', ['as' => 'missoes.adicionar.deletar', 'uses' => 'Missoes\MissoesController@index']);
});



/*
Route::get('/artigos', function() {
    return response()->json([
        ['name' => 'Leandro', 'idade' => 26],
        ['name' => 'Gael', 'idade' => 2],
    ]);
});
*/
