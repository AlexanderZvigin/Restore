<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class DeleteNewscontroller extends Controller
{
    public function DeleteNews($id)
  {
  $news=News::find($id);
  $news->delete();
  return redirect()->route('AdminAllNews')->with('success','Новость успешно удалена!');
  }
}
