<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
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
        $posts = Post::orderBy('created_at','desc')->simplePaginate(2);
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
