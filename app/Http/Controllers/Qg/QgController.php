<?php

namespace App\Http\Controllers\Qg;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class QgController extends Controller
{

    public function index() {
        return redirect(route('qg.login'));
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

            Session::put(['id' => Auth::id()]);
            return redirect()->route('home.home');

        }

        return redirect()->route('qg.login');
    }
    public function sair() {
        Session::flush();
        Auth::logout();
        return redirect()->route('qg.login');
    }
    public function cadastro() {
        return view('');
    }
}
