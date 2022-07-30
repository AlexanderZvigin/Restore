<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\games;

class gamesController extends Controller
{
 public function allGames()
 {
   return view('games',['data'=>games::all()]);

 }
}
