<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $permissoes = auth()->user()->permissions;
        if($permissoes != 'admin' && $permissoes != 'moderator') return redirect(route('home.home'));
        return view('admin.index');
    }
}
