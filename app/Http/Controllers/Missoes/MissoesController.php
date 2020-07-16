<?php

namespace App\Http\Controllers\Missoes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Missoes;

class MissoesController extends Controller
{
    public function index() {
        $permissoes = auth()->user()->permissions;
        return view('missoes.index', compact('permissoes'));
    }
}
