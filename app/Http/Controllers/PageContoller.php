<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageContoller extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }

    public function posts(){
        return view('posts');
    }

    public function contact(){
        return view('contact');
    }
}
