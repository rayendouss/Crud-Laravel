<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function getSession(Request $request){
        if($request->session()->has('name')){
            echo $request->session()->get('name');
        }else{
            echo 'session not found';
        }
    }

    public function setSession(Request $request){
        $request->session()->put('name','rayen');
        return redirect()->action('SessionController@flashSession')->with('msg','session created');

    }

    public function deleteSession (Request $request){
        $request->session()->forget('name');
        echo 'Session deleted';
    }

    public function flashSession (){
        return view('alert');
    }
}
