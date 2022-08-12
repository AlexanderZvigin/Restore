<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class editFilmsController extends Controller
{
  public function getFilm($filmId)
  {
      $film = DB::table('films')->where('id', $filmId)->first();
      return view('editFilm',["film"=>$film]);
  }
}
