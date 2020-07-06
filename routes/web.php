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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nomes', ['as' => 'nomes.listar', 'uses' => 'MissoesController@ListarNome']);
/*
Route::get('/artigos', function() {
    return response()->json([
        ['name' => 'Leandro', 'idade' => 26],
        ['name' => 'Gael', 'idade' => 2],
    ]);
});
*/
