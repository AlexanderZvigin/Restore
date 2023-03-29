<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\feedbackRequest;
use App\Models\Feedback;
use DB;

class feedbackController extends Controller
{  public function feedback(feedbackRequest $req)
    {
        $data=new Feedback();
        $data->email=$req->input('name');
        $data->message=$req->input('message');
        $data->save();
           return redirect()->route('lettersForm')->with('success','Обращение успешно отправлено');
    }
}
