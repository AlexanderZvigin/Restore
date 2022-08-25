<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\criticRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class addCriticController extends Controller
{
  public function addCritic(criticRequest $req)
  {
    $critic=new User();
    $hashedPassword=Hash::make($req->input('password'));
    $critic->email=$req->input('email');
    $critic->name=$req->input('username');
    $critic->password=$hashedPassword;
    $critic->is_critic=1;
    $critic->save();
    return redirect()->route('addCritic')->with('success','Фильм успешно добавлен!');

  }
}
