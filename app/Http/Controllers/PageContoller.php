<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Figure;
use App\Models\Post;
use Illuminate\Http\Request;

class PageContoller extends Controller
{
    public function home(){
        $figures = Figure::limit(15)->get();
        // dd($figures );
        return view('home',['figures' => $figures]);
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }

    public function posts(){
        $posts = Post::orderBy('created_at','desc')->simplePaginate(6);
        // $posts = Post::orderBy('created_at','desc')->paginate(1);


        return view('posts',['posts' => $posts]);
    }
    public function post(Post $post){
        $categories = Category::inRandomOrder()->limit(4)->get();

        return view('post',['post' => $post,'categories' => $categories]);
    }

    public function contact(){
        return view('contact');
    }
}
