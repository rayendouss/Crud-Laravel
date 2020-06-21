<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(){
        return "helllo everbody" ; 
    }
    public function affich($id,$user){
        return "helllo ".$id. "cava si ".$user."?" ; 
    }


}
