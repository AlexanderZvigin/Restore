<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Films;

class FilmDeleteController extends Controller
{
  public function FilmDelete($filmId)
  {
  $Film=Films::find($filmId);
  $Film->delete();
  return redirect()->route('GameSave',$filmId)->with('success','Фильм успешно удален');
  }
}
