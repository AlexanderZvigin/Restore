<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use App\Models\News;

class AddNewsController extends Controller
{
    public function AddNews(NewsRequest $req)
    {
        $news=new News();
        $news->header=$req->input('header');
        $news->text=$req->input('text');
           $news->save();
           return redirect()->route('AddNewsForm')->with('success','Новость успешно добавлена!');
    }
    
}
