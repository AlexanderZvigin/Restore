<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\gameCommentRequest;
use App\Models\Comments;
use Auth;

class currentGameController extends Controller
{
  public function currentGame($GameId)
  {
    $gameComments=DB::table('comments')->where('game_id', $GameId)->get();
    $game = DB::table('games')->where('id', $GameId)->first();
    return view('currentGame',["game"=>$game],["GameComments"=>$gameComments]);
  }
  public function CommentSave(gameCommentRequest $req,$gameId)
  {
  $comment=new Comments();
  $comment->game_id=$gameId;
  $comment->username=Auth::user()->name;
  $comment->score=$req->input('rating');
  $comment->comment=$req->input('comment');
  $comment->save();
  return redirect()->route('currentGame',$gameId)->with('success','Отзыв успешно добавлен!');
  }
}
