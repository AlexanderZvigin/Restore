<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use DB;

class getNewscontroller extends Controller
{
  public function getNews()
  {
    return view('allNews',['data'=>DB::table('news')->orderBy('created_at','desc')->paginate(10)]);
  }
}
