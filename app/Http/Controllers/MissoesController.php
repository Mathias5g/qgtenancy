<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MissoesController extends Controller
{
    public function ListarNome() {
        return response()->json([
            ['Leandro', 'Joao']
        ], 404);
    }
}
