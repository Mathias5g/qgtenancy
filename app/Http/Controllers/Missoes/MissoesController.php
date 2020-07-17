<?php

namespace App\Http\Controllers\Missoes;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Missoes;

class MissoesController extends Controller
{
    public function index() {
        $useriId = auth()->user()->id;
        $missionsData = DB::table('missoes')->select('id', 'title', 'type', 'start')->where('groupid', $useriId)->get();
        return view('missoes.index', compact('missionsData'));
    }
}
