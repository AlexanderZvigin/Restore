<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class getNewscontroller extends Controller
{
  public function getNews()
  {
    return view('allNews',['data'=>News::all()]);
  }
}
