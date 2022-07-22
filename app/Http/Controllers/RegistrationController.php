<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegRequest;
use App\Models\Users;
class RegistrationController extends Controller {
    public function registration(RegRequest $req){
    $user=new Users();;
    $user->email=$req->input('email');
    $user->password=$req->input('password');
    $user->save();
    return redirect()->route('main');
    }
}
