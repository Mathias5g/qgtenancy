<?php

namespace App\Http\Controllers\Missoes;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Missoes;

class CalendarController extends Controller
{
    public function index() {
        $users = DB::table('missoes')->select('id', 'title', 'start')->get();
        return response()->json($users);;
    }
}
