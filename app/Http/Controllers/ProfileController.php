<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{
    public function ProfileChange(ProfileRequest $req)
    {
      $user=User::find(Auth::user()->id);
      $user->email=$req->input('email');
      $user->name=$req->input('username');
      $user->update();
      return redirect()->route('profile')->with('success','Информация успешно обновлена!');


    }
}
