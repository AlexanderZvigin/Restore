<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class currentGameController extends Controller
{
  public function currentGame($GameId)
  {
    $game = DB::table('games')->where('id', $GameId)->first();
    return view('currentGame',["game"=>$game]);
  }
}
