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
        $missionData = DB::table('missoes')->select('id', 'title', 'type', 'start')->where('groupid', $useriId)->get();
        return view('missoes.index', compact('missionData'));
    }

    public function adicionar() {
        return view('missoes.adicionar');
    }

    public function create(Request $req) {
        $dados = $req->all();
        $numDeGrupos = $dados['groups'];
        echo $numDeGrupos;
        $slots = [];
        for ($i=1; $i < $numDeGrupos; $i++) {
            array_push($slots, $dados['group-'.$i]);
        }
        $slotsSerialized = serialize($slots);

    }
}
