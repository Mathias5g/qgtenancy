<?php

namespace App\Http\Controllers\Missoes;

use App\Http\Controllers\Controller;
use App\UserGroup;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
        $userId = auth()->user()->id;
        $groupId = DB::table('user_groups')->select('idgroup')->where('idgroup', $userId)->first();
        $numDeGrupos = $dados['groups'];
        $slots = [];
        for ($i=0; $i < $numDeGrupos; $i++) {
            array_push($slots, $dados['group-'.$i]);
        }
        $slotsSerialized = serialize($slots);
        $dataMission = [
            'title' => $dados['title'],
            'image' => 'https://get.wallhere.com/photo/Arma-3-video-games-1397771.jpg',
            'description' => $dados['description'],
            'slots' => $slotsSerialized,
            'type' => 'Oficial',
            'start' => '2020-07-25 20:00:00',
            'groupid' => $groupId->idgroup
        ];
        $lastId = DB::table('missoes')->insertGetId($dataMission);
    }
}
