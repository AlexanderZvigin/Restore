<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class adminAllNewsController extends Controller
{
    public function allNews()
    {
      return view('adminAllNews',['data'=>News::all()]);
    }
}
