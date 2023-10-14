<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Category;
use App\Models\Circumscription;
use App\Models\Comment;
use App\Models\Figure;
use App\Models\Interaction;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Province;
use App\Models\Testimony;
use Illuminate\Http\Request;

class PageController extends Controller
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
        $visitors = 200+Interaction::sum('seen');
        $touched = 200+Comment::all()->count();
        $circonscription = Circumscription::all()->count();

        // dd($touched,$circonscription,$visitors);
        return view('about',compact('touched','circonscription','visitors'));
    }


    public function contact(){
        return view('contact');
    }


    public function our_stat(Request $request){
        $cands = array();
        $bestvis = array();
        $compars = array();


        // si les candidats à comparer son choist
        if ($request->input('candOne') && $request->input('candTwo') && !($request->input('candOne') == $request->input('candTwo'))) {
            $comparCands = Candidate::has('interactions')->whereIn('id',[$request->input('candOne'),$request->input('candTwo')])->get();
        } else {
            $comparCands = Candidate::select('candidates.id','candidates.name','candidates.firstname','candidates.photo')
                                    ->leftJoin('interactions', 'interactions.candidate_id', '=', 'candidates.id')
                                    ->selectRaw('sum(interactions.seen) as vue_sum')
                                    ->has('interactions')
                                    ->groupBy('candidates.id')
                                    ->orderBy('vue_sum', 'desc')
                                    ->limit(2)
                                    ->get();
        }


        $names = [$comparCands[0]->fullname(),$comparCands[1]->fullname()];
        // dd($names);
        array_push($compars,[
            'category'=> 'Vue',
            'first'=> $comparCands[0]->interactions->seen,
            'second'=> $comparCands[1]->interactions->seen
        ]);

        array_push($compars,[
            'category'=> 'Likes',
            'first'=> $comparCands[0]->interactions->like,
            'second'=> $comparCands[1]->interactions->like
        ]);

        array_push($compars,[
            'category'=> 'Commentaires',
            'first'=> $comparCands[0]->comments->count(),
            'second'=> $comparCands[1]->comments->count()
        ]);

        array_push($compars,[
            'category'=> 'Dislikes',
            'first'=> $comparCands[0]->interactions->dislike,
            'second'=> $comparCands[1]->interactions->dislike
        ]);

        $compars = response()->json($compars);
        $names = response()->json($names);

        $candidates = Candidate::has('interactions')->get();

        foreach ($candidates as $key => $candidate) {

            $tab['tag'] = $candidate->firstnameAndName();
            $tab['count'] = (int) $candidate->interactions->seen;

            array_push($cands,$tab);

        }

        $cands = response()->json($cands);

        $bestvisited = Candidate::select('candidates.id','candidates.name','candidates.firstname','candidates.photo')
            ->leftJoin('interactions', 'interactions.candidate_id', '=', 'candidates.id')
            ->selectRaw('sum(interactions.seen) as vue_sum')
            ->has('interactions')
            ->groupBy('candidates.id')
            ->orderBy('vue_sum', 'desc')
            ->limit(6)
            ->get();

        // dd($bestvisited);

        foreach ($bestvisited as $key => $item) {

            $tab['name'] = $item->fullname();
            $tab['steps'] = (int) $item->vue_sum;
            $tab['pictureSettings'] = ['src' => $item->photo];
            array_push($bestvis,$tab);
        }

        //retourner un json adapté au données attendu en js
        $bestvis = response()->json($bestvis);
        $candidates = Candidate::has('candidature')->has('interactions')->get();
            // dd($compars);

        return view('statistique.our-stat',compact('cands','compars','bestvis','candidates','names'));
    }

    public function ceni_stat(){
        $provs = array();
        $provinces = Province::all();


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

        return view('statistique.ceni-stat',compact('provs'));
    }


    public function getCompar(){

    }

}
