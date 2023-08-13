<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Figure;
use App\Models\Post;
use App\Models\Province;
use Illuminate\Http\Request;

class PageContoller extends Controller
{
    public function home(){
        $provs = array();


        // dd(json_encode($tab));

        $provinces = Province::limit(2)->get();



        foreach ($provinces as $key => $province) {

            $tabCirc  = array();

            foreach ($province->circonscriptions as $key => $circonscription) {
                // array_push($tabCirc, $circonscription->name);
                // dd($tabCirc);
                array_push($tabCirc,
                    [
                        'name' => $circonscription->name,
                        'value' => $circonscription->elector_number,
                    ],
                );

            }

            $tab['name'] = $province->name;
            $tab['children'] = $tabCirc;

            array_push($provs,$tab);
            // dd($tab);

        }
        $provs = json_encode($provs);
        // dd($provs);

        $figures = Figure::limit(15)->get();
        return view('home',['figures' => $figures,'provs' => $provs]);
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
