<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function showForm(){
        return view('pages.login');
    }
    public function login(Request $request){
        $nom= $request->input('username');
        $pass = $request->input('password');
  
        if(($nom=='rayen')&&($pass=='rayen'))
        {
            return redirect()->action('LoginController@islogged');
        }
        return redirect()->back();
    }
    public function islogged(){
        return view('pages.homeB');
    }
}
