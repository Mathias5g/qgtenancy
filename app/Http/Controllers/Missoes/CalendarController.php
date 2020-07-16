<?php

namespace App\Http\Controllers\Missoes;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Missoes;

class CalendarController extends Controller
{
    public function index() {
        $id = auth()->user()->id;
        $groupId = DB::table('user_groups')->select('idgroup')->where('iduser', $id)->first();
        $missions = DB::table('missoes')->select('id', 'title', 'start')->where('groupid', $groupId->idgroup)->get();
        return response()->json($missions);
    }
}
