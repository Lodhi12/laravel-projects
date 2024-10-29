<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome(){
        return "<h1>Welcome to Controller Lecture</h1>";
        return view('welcome1'); //welcomeos wont work
    }

    public function showUser(){
        return view('user2'); //compact wont work
    }
    public function showBlog(){
        return view('blog');
    }
}

