<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class adminFeedbackcontroller extends Controller
{
  public function getFeedback()
  {
    return view('adminFeedback',['data'=>Feedback::all()]);
  }
}
