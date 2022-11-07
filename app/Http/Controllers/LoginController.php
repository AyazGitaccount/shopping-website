<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function myfunction(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
           return "Username or password not mathced";
        }
        else{
            $req -> session()->put('user',$user);
             return redirect('/');
        }
    }
}
