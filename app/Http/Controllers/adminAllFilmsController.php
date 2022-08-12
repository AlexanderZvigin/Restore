<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Films;

class adminAllFilmsController extends Controller
{
  public function allFilms()
  {
    return view('adminAllFilms',['data'=>Films::all()]);
  }
}
