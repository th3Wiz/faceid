<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class LoginController extends Controller
{
    //
    public function getLogin(Request $request){
        $user = User::where('username',$request['username'])->first();
        if (!$user){
            Session::flush();
            return redirect()->route('/')->with('error',['No user found!']);
        }
        if ($user['password'] != md5($request['password'])){
            Session::flush();
            return redirect()->route('/')->with('error',['Wrong password']);
        }
        Session::put('user',$user);
        Session::save();
        if ($user['isAdmin'] == 1){
            return redirect()->route('admin/home');
        } else {
            return redirect()->route('home');
        }
    }

    public function getRegister(Request $request){
        //Session::flush();
    	$user = new User;
        $user_in_db = User::where('username',$request['username'])->first();
        if ($user_in_db) {
            return redirect()->route('register')->with('error',['User is existed']);
        }
        $user->username = $request['username'];
        $user->password = md5($request['password']);
        $user->name = $request['name'];
        if ($request['gender'] === 'male') $user->gender = 0;
        else $user->gender = 1;
        $user->isAdmin = false;
        $user->save();
        return redirect()->route('/');
    }

    public function getLogout(){
        Session::flush();
        return redirect()->route('/');
    }
}
