<?php

namespace App\Http\Controllers\Missoes;

use App\Http\Controllers\Controller;
use App\Missoes;
use App\UserGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MissoesController extends Controller
{
    protected $title;
    protected $image;
    protected $description;
    protected $groups;
    protected $slots;
    protected $type;
    protected $start;
    protected $slug;
    protected $group;
    protected $createAt;

    protected $userId;
    protected $idGroup;

    protected $slotsSerialized;

    protected $dataMission;

    public function __construct(Request $request)
    {
        $this->title = $request->title;
        $this->image = $request->image;
        $this->description = $request->description;
        $this->groups = $request->groups;
        $this->slots = [];
        $this->type = $request->type;
        $this->start = $request->start;
        $this->createAt = now();

        $this->slug = Str::slug($this->title);
    }

    public function index(Request $request) {
        $useriId = auth()->user()->id;
        $missionData = DB::table('missoes')->select('id', 'title', 'description', 'type', 'start', 'slug')->where('groupid', $useriId)->get();
        return view('missoes.index', compact('missionData'));

    }

    public function adicionar() {
        return view('missoes.adicionar');
    }

    public function create(Request $request) {
        $this->userId = $request->session()->get('id');
        $this->idGroup = UserGroup::where('idgroup', $this->userId)->first();

        //Primeira posição do array referente ao nome do grupo
        if($this->groups > 0) {
            for ($i=0; $i < $this->groups; $i++) {
                array_push($this->slots, $request['group'.$i]);
            }
            $this->slotsSerialized = serialize($this->slots);
        }

        $this->dataMission = [
            'title' => $this->title,
            'image' => 'https://www.wasd.pt/wp-content/uploads/2016/06/arma-3-nat-games-wallpaper-logo-1280x720.jpg',
            'description' => $this->description,
            'slots' => $this->slotsSerialized,
            'type' => $this->type,
            'start' => $this->start,
            'slug' => $this->slug,
            'groupid' => $this->idGroup->id
        ];

        $lastId = DB::table('missoes')->insertGetId($this->dataMission);
        if($lastId > 0){
            return redirect()->route('missoes.missoes');
        }
    }

    public function show($slug) {
        $missionData = Missoes::where(['slug' => $slug, 'groupid' => 1])->first();
        $slots = unserialize($missionData->slots);
        return view('missoes.detalhes', compact(['missionData', 'slots']));
    }

    public function delete($id) {
        $delete = DB::table('missoes')->where([
            ['id', $id],
            ['groupid', 1]
        ])->delete();
        if($delete > 0){
            return redirect(route('missoes.missoes'));
        }
    }
}
