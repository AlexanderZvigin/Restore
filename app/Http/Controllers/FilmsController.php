<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Films;
class FilmsController extends Controller
{
  public function allFilms()
  {
    return view('films',['data'=>Films::all()]);

  }
}
