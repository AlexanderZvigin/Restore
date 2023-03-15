<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use DB;
use App\Http\Requests\newsUpdateReques;

class ChangeNewsController extends Controller
{
    public function getNews($id)
    {
        $news = DB::table('news')->where('id', $id)->first();
        return view('editNews',["news"=>$news]);
    }
    public function updateNews(newsUpdateReques $req,$id)
  {
  $news=News::find($id);
  $news->header=$req->input('header');
  $news->text=$req->input('text');
  $news->update();
  return redirect()->route('AdminAllNews')->with('success','Информация о новости успешно изменена');
  }
}
