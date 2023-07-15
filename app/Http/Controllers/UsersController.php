<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
	public function Register(Request $request){
        $u = new User();
        $u -> username = $request -> post("username");
        $u -> email = $request -> post("email");
        $u -> password = Hash::make($request -> post("password"));
        $u -> save();

        return redirect("/login")-> with("created",true);
    }

    public function Login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) 
            return redirect("/");
        return redirect("/login")->with("failed",true);
    }

    public function Logout(Request $request){
        Auth::logout();
        return redirect("/login")->with("logout",true);
    }
}
