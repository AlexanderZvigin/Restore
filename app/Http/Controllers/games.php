<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\games;

class games extends Controller
{
  $game=new games();
  $game->name="Ведьмак";
  $game->save();
}
