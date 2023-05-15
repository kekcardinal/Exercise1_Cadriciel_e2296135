<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return view('home');
    }

    public function projects(){
        return view('projects');
    }

    public function contact(){
        return view('contact');
    }

    public function resume(){
        return view('resume');
    }

    public function contactForm(Request $request){
        
        return view('contact', ['data' => $request]);
    }
}
