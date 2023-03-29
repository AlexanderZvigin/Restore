<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class DeletefeedbackController extends Controller
{
    public function DeleteFeedback($id)
    {
      $feedback=Feedback::find($id);
      $feedback->delete();
      return redirect()->route('adminFeedback')->with('success','Обращение успешно удалено!');
    }
}
