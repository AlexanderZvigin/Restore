<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class currentFilmController extends Controller
{
  public function currentFilm($FilmId)
  {
      $FilmComments=DB::table('film_comments')->where('film_id', $FilmId)->get();
    $film = DB::table('films')->where('id', $FilmId)->first();
    return view('currentFilm',["film"=>$film],["FilmComments"=>$FilmComments]);
  }
}
