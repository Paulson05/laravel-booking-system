<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(){
        $users = User::all();
        return view('admin.pages.dashboard',[ 'users' => $users]);
    }


    public function getLogin(){
        return view ('Admin.pages.login');
    }
    public  function  postLogin(Request $request){
//           dd($request->all());
        if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))){

            return redirect()->back()->with('info', 'could not sign you in with those details');

        }

        return redirect()->route('admin.dashboard')
            ->with('info', 'you are successfully signed in!');

    }
    public  function logOut(){

        Auth::logout();
        return redirect()->route('home');
    }
}
