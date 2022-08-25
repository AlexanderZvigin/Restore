<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\filmCommentRequest;
use App\Models\FilmComments;
use Auth;

class currentFilmController extends Controller
{
  public function currentFilm($FilmId)
  {
      $FilmComments=DB::table('film_comments')->where('film_id', $FilmId)->get();
    $film = DB::table('films')->where('id', $FilmId)->first();
    return view('currentFilm',["film"=>$film],["FilmComments"=>$FilmComments]);
  }
  public function CommentSave(filmCommentRequest $req,$id)
  {
    $filmComment=new FilmComments();
    $filmComment->film_id=$id;
    $filmComment->username=Auth::user()->name;
    $filmComment->score=$req->input('rating');
    $filmComment->comment=$req->input('comment');
    $filmComment->save();
    return redirect()->route('currentFilm',$gameId)->with('success','Отзыв успешно добавлен!');

  }
}
