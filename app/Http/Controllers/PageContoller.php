<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Category;
use App\Models\Figure;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Province;
use App\Models\Testimony;
use Illuminate\Http\Request;

class PageContoller extends Controller
{
    public function home(){
        $provs = array();
        $cands = array();


        // dd(json_encode($tab));

        $provinces = Province::all();

        $candidates = Candidate::has('interactions')->get();

        $testimonies = Testimony::orderby('created_at','desc')->take(10)->get();

        $partners = Partner::all();


        // dd($testimonies);

        // Obtenir les candidats les plus liked
        foreach ($candidates as $key => $candidate) {

            $tabCirc  = array();

            // array_push($cands,
            //     [
            //         'name' => $candidate->name,
            //         'value' => (int) $candidate->interactions->seen,
            //     ],
            // );

            $tab['tag'] = $candidate->firstnameAndName();
            $tab['count'] = (int) $candidate->interactions->seen;

            array_push($cands,$tab);

        }

        $b = response()->json($cands);
        // return $b;
        $cands = $b;


        // Obtenir la repartition des sieges afin de le passer à js
        foreach ($provinces as $key => $province) {

            $tabCirc  = array();

            foreach ($province->circonscriptions as $key => $circonscription) {
                // array_push($tabCirc, $circonscription->name);
                // dd($tabCirc);
                array_push($tabCirc,
                    [
                        'name' => $circonscription->name,
                        'value' => (int) $circonscription->siege_number,
                    ],
                );

            }

            $tab['name'] = $province->name;
            $tab['children'] = $tabCirc;

            array_push($provs,$tab);
            // dd($tab);

        }
        // $provs = json_encode($provs);

        // $data = ['message' => 'No new orders!'];
        // return response()->json($data);
        $a = response()->json($provs);
        // return $a;
        $provs = $a;
        // dd($provs);

        $figures = Figure::limit(15)->get();
        return view('home',[
            'figures' => $figures,
            'provs' => $provs,
            'cands' => $cands,
            'testimonies' => $testimonies,
            'partners' => $partners
        ]);
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
