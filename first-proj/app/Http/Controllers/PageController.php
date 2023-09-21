<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome(){
        return view('welcome');
    }
    
    
    public function showUser(string $id){
        // return view('user',['id'=> $id]); // send value n route
        return view('user',compact('id')); // better
    }

    public function showBlog(){
        return view('blog');
    }
}
