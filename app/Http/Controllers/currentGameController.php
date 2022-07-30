<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class currentGameController extends Controller
{
  public function currentGame($GameId)
  {
    dd($GameId);
  }
}
