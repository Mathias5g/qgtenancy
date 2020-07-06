<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QgController extends Controller
{
    public function index() {
        return view('qg.login');
    }
    public function cadastro() {
        return view('');
    }
    public function create() {

    }
}
