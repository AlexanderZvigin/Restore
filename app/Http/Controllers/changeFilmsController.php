<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\changeFilmRequest;
use App\Models\Films;

class changeFilmsController extends Controller
{
  public function changeFilm(changeFilmRequest $req,$id)
  {
  $film=Films::find($id);
  $film->title=$req->input('title');
   $film->Director=$req->input('director');
    $film->Date=$req->input('outdate');
     $film->Description=$req->input('description');
     $film->update();
     return redirect()->route('filmChange',$id)->with('success','Информация о фильме успешно изменена');
  }
}
