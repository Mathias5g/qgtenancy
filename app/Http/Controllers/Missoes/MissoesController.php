<?php

namespace App\Http\Controllers\Missoes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Missoes;

class MissoesController extends Controller
{
    public function index() {
        //$missoes = Missoes::all();
        $dados = [
            ['nome' => 'leandro', 'idade' => 26],
            ['nome' => 'Jose',  'idade' => 10],
            ['nome' => 'Gael', 'idade' => 1]
        ];
        return view('missoes', compact('dados'));
    }
}
