<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games;
class adminAllGamesController extends Controller
{
    public function allGames()
    {
      return view('adminAllGames',['data'=>Games::all()]);
    }
}
