<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home(){

        return view ('home'); 
    }
    public function about(){

        return view ('about'); 
    }
    public function gallery(){

        return view ('gallery'); 
    }
    public function location(){

        return view ('location'); 
    }

    public function contact(){

        return view ('contact'); 
    }
    
    public function contactHandler(Request $request){

        return "Your name is: " . $request ->input('name');
    }

    public function posts($id){

        return "You Passed: ". $id;
    }
}
