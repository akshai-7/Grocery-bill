<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    public function login(Request $request){

        $user = User::where(['email'=>$request->email])->first();

        if(!$user|| !Hash::check($request->password,$user->password)){
                // return "Username or Password is not matched";
                // return redirect('/');
                echo  "<script>alert('Username or Password is not matched')</script>";

                // return redirect('/')->with('success', 'Thanks for contacting us!');
        }else{

            return redirect('/index');
        }

    }
}
