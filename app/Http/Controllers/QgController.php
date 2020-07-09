<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QgController extends Controller
{
    public function index() {
        return view('qg.login');
    }
    public function entrar(Request $request) {
        $dados = $request->all();

        if(Auth::attempt(['username' => $dados['username'], 'password' => $dados['password']])){
            return redirect()->route('home.home');
        }

        return redirect()->route('qg.login');
    }
    public function cadastro() {
        return view('');
    }
    public function create() {

    }
}
