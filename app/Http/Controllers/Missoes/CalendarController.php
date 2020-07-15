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
        $userId = $groupId = DB::table('user_groups')->select('idgroup')->where('iduser', $id)->get();
        $users = DB::table('missoes')->select('id', 'title', 'start')->where('groupid', 2)->get();
        return response()->json([$id, $userId, $users]);
    }
}
