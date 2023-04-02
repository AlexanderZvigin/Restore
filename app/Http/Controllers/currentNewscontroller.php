<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class currentNewscontroller extends Controller
{
  public function getCurrentNews($idNews)
  {
    //$Comments=DB::table('comments')->where('news_id', $idNews)->get();
    $News = DB::table('news')->where('id', $idNews)->first();
    return view('currentNews',["News"=>$News]);
  }
}
