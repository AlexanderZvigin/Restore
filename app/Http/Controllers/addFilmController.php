<?php

namespace App\Http\Controllers;

use App\Models\Films;
use Illuminate\Http\Request;
use App\Http\Requests\addFilmRequest;


class addFilmController extends Controller
{
  public function FilmSave(addFilmRequest $req)
  {
  $film=new Films();
  $film->title=$req->input('title');
   $film->Director=$req->input('director');
    $film->Date=$req->input('outdate');
     $film->Description=$req->input('description');
     $film->save();
     return redirect()->route('addFilm')->with('success','Фильм успешно добавлен!');
  }
}
