<?php

namespace App\Http\Controllers\Qg;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class QgController extends Controller
{

    public function index() {
        return view('index');
    }
    public function login() {
        return view('qg.login');
    }
    public function auth(Request $request) {

        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($validatedData)){
            return redirect()->route('home.home');
        }

        return redirect()->route('qg.login');
    }
    public function sair() {
        Auth::logout();
        return redirect()->route('qg.login');
    }
    public function cadastro() {
        return view('');
    }
}
