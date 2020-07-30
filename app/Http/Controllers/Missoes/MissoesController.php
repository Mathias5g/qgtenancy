<?php

namespace App\Http\Controllers\Missoes;

use App\Group;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class MissoesController extends Controller
{
    protected $title;
    protected $image;
    protected $description;
    protected $groups;
    protected $slots;
    protected $type;
    protected $start;
    protected $group;
    protected $createAt;

    protected $userId;
    protected $idGroup;

    public function __construct(Request $request)
    {
        $this->middleware(function ($request, $next) {
            $this->userId = Auth::user()->id;
            return $next($request);
        });

        $this->title = $request->title;
        $this->image = $request->image;
        $this->description = $request->description;
        $this->groups = $request->groups;
        $this->slots = [];
        $this->type = $request->type;
        $this->start = $request->start;
        $this->createAt = now();

        $this->idGroup = DB::table('user_groups')->select('idgroup')->where('idgroup', $this->userId)->first();

        dd($this->userId);
    }

    public function index(Request $request) {

        /*
        $useriId = auth()->user()->id;
        $missionData = DB::table('missoes')->select('id', 'title', 'type', 'start')->where('groupid', $useriId)->get();
        return view('missoes.index', compact('missionData'));*/

    }

    public function adicionar() {
        return view('missoes.adicionar');
    }

    public function create(Group $group) {

        /*
        $dados = $req->all();
        dd($dados);

        /*
        $groupId = DB::table('user_groups')->select('idgroup')->where('idgroup', $userId)->first();

        for ($i=0; $i < $this->groups; $i++) {
            array_push($this->slots, $this->group . '-' . $i);
        }
        $slotsSerialized = serialize($slots);*/
/*
        $missoes->title = $this->title;
        $missoes->image = $this->image;
        $missoes->description = $this->description;
        $missoes->type = $this->type;
        $missoes->start = $this->groupid;



        $dataMission = [
            'title' => $dados['title'],
            'image' => 'https://get.wallhere.com/photo/Arma-3-video-games-1397771.jpg',
            'description' => $dados['description'],
            'slots' => $slotsSerialized,
            'type' => 'Oficial',
            'start' => '2020-07-25 20:00:00',
            'groupid' => $groupId->idgroup
        ];

        dd($dataMission);

        /*
        $lastId = DB::table('missoes')->insertGetId($dataMission);
        */
    }
}
