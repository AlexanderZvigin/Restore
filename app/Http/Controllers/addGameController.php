<?php

namespace App\Http\Controllers;
use App\Http\Requests\addGameRequest;
use Illuminate\Http\Request;
use App\Models\games;
class addGameController extends Controller
{
    public function GameSave(addGameRequest $req)
    {
     $game=new games();
     $game->name=$req->input('name');
      $game->OutDate=$req->input('outdate');
       $game->Developers=$req->input('Developers');
        $game->Platform=$req->input('platform');
        $game->Description=$req->input('description');
        $game->save();
        return redirect()->route('addGame')->with('success','Игра добавлена успешно!');
    }
}
