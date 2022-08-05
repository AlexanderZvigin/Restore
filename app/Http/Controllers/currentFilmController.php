<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class currentFilmController extends Controller
{
  public function currentFilm($FilmId)
  {
    $film = DB::table('films')->where('id', $FilmId)->first();
    return view('currentFilm',["film"=>$film]);
  }
}
