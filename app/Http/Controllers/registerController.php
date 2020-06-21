<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function showForm(Request $request){
        return view('pages.register');
    }

    public function register(Request $request){
     $this->validate($request,[
       'password' =>'min:6',
       'email' => ' email',
       'image' =>' image'
     ]);
     if($request->hasFile('image')){
      $filee = $request->file('image');
      $ext = $filee->getClientOriginalExtension();
      $mimeType = $filee-> getClientMimeType();
      $name= $filee->getClientOriginalName();

      $path = $filee ->store('avatar');
    
     }
     return $path ;
    }
}
