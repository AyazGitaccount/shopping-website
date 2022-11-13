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
           return "Username or password not matched";
        }
        else{
            $req -> session()->put('user',$user);
             return redirect('/');
        }
    }
     function signup_function(Request $url)
    {
         $user = new User;
         $user->name=$url->name;
         $user->email=$url->email;
         $user->password=Hash::make($url->password);
         $user->save();
         return redirect('/home-loginpage');
    }
}
