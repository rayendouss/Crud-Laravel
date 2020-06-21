<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }
    public function about(){
        return view('pages.about');
    }
    public function get($id){
        $n="rayen";
        return view('pages.get')->with([
            'ide'=>$id,
            'n'=>$n
        ]);
    }
}
