<?php
use Illuminate\Support\Facades\DB;

$id = auth()->user()->id;
$username = auth()->user()->username;
$email = auth()->user()->email;
$permissions = auth()->user()->permissions;
$groupId = DB::table('user_groups')->select('idgroup')->where('iduser', $id)->get();
?>
